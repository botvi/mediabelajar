<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ujikom;
use RealRashid\SweetAlert\Facades\Alert;

class UjikomController extends Controller
{
    public function show()
    {
        $ujiKoms = UjiKom::all();
        return view('page.ujikom.index', compact('ujiKoms'));
    }

    public function index()
    {
        try {
            $ujikoms = Ujikom::all();
            $questions = [];
            foreach ($ujikoms as $ujikom) {
                $questionData = [
                    'question' => $ujikom->question,
                    'answers' => $ujikom->answers,
                ];
                $questions[] = $questionData;
            }
            return response()->json($questions, 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to fetch Ujikom data', 'error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        return view('page.ujikom.create');
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'questions.*.question' => 'required|string',
                'questions.*.answers.*.text' => 'required|string',
                'questions.*.correct_answer' => 'required|numeric|min:0|max:3',
            ]);

            foreach ($validatedData['questions'] as $questionData) {
                $ujikom = new Ujikom();
                $ujikom->question = $questionData['question'];
                $answers = [];
                foreach ($questionData['answers'] as $index => $answerData) {
                    $answers[] = [
                        'text' => $answerData['text'],
                        'correct' => $index == $questionData['correct_answer']
                    ];
                }
                $ujikom->answers = $answers;
                $ujikom->save();
            }

            Alert::success('Success', 'Ujikom saved successfully');
            return redirect()->route('ujikom.show');
        } catch (\Exception $e) {
            Alert::error('Error', 'Failed to save Ujikom: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function edit($id)
    {
        $ujikom = Ujikom::findOrFail($id);
        return view('page.ujikom.update', compact('ujikom'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'question' => 'required|string',
                'answers.*.text' => 'required|string',
                'correct_answer' => 'required|numeric|min:0|max:3',
            ]);

            $ujikom = Ujikom::findOrFail($id);
            $ujikom->question = $validatedData['question'];
            $answers = [];
            foreach ($validatedData['answers'] as $index => $answerData) {
                $answers[] = [
                    'text' => $answerData['text'],
                    'correct' => $index == $validatedData['correct_answer']
                ];
            }
            $ujikom->answers = $answers;
            $ujikom->save();

            Alert::success('Success', 'Ujikom updated successfully');
            return redirect()->route('ujikom.show');
        } catch (\Exception $e) {
            Alert::error('Error', 'Failed to update Ujikom: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $ujikom = Ujikom::findOrFail($id);
            $ujikom->delete();

            Alert::success('Success', 'Ujikom deleted successfully');
            return redirect()->route('ujikom.show');
        } catch (\Exception $e) {
            Alert::error('Error', 'Failed to delete Ujikom: ' . $e->getMessage());
            return redirect()->back();
        }
    }
}
