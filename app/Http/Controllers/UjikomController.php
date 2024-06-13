<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ujikom;
use RealRashid\SweetAlert\Facades\Alert;

class UjikomController extends Controller
{

    public function show()
    {
        // Fetch all UjiKom records
        $ujiKoms = UjiKom::all();

        // Pass the data to the view
        return view('page.ujikom.index', compact('ujiKoms'));
    }

    public function index()
    {
        try {
            // Ambil semua data Ujikom dari database
            $ujikoms = Ujikom::all();

            // Ubah format data sesuai dengan yang diinginkan
            $questions = [];
            foreach ($ujikoms as $ujikom) {
                $questionData = [
                    'question' => $ujikom->question,
                    'answers' => $ujikom->answers,
                ];
                $questions[] = $questionData;
            }

            // Kembalikan data dalam format JSON
            return response()->json($questions, 200);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kembalikan respons dengan pesan error
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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'questions.*.question' => 'required|string',
            'questions.*.answers.*.text' => 'required|string',
            'questions.*.correct_answer' => 'required|numeric|min:0|max:3', // Assuming answers are indexed from 0 to 3
        ]);

        // Save data to the database
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
            $ujikom->answers = $answers; // Save as array
            $ujikom->save();
        }

        // Show success notification using SweetAlert
        Alert::success('Success', 'Ujikom saved successfully');

        // Redirect to the ujikom.show route (adjust with appropriate ID or parameter)
        return redirect()->route('ujikom.show');
    } catch (\Exception $e) {
        // Show error notification using SweetAlert
        Alert::error('Error', 'Failed to save Ujikom: ' . $e->getMessage());

        // Redirect back to the previous page with input
        return redirect()->back()->withInput();
    }
}
}
