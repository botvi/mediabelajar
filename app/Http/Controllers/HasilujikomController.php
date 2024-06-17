<?php

namespace App\Http\Controllers;

use App\Models\Hasilujikom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilujikomController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'score' => 'required|integer|min:0|max:100',
        ]);

        // Get the logged-in user
        $user = Auth::user();

        // Find existing score for the user
        $existingScore = Hasilujikom::where('user_id', $user->id)->first();

        if ($existingScore) {
            // Update the score if the new score is higher
            if ($request->score > $existingScore->score) {
                $existingScore->update(['score' => $request->score]);
            }
        } else {
            // Create a new score record if none exists
            Hasilujikom::create([
                'user_id' => $user->id,
                'score' => $request->score,
            ]);
        }

        return response()->json(['message' => 'Score saved successfully']);
    }

    public function leaderboard()
    {
        // Fetch all scores along with user names
        $allScores = Hasilujikom::with('user')
            ->orderBy('score', 'desc')
            ->get()
            ->map(function ($hasilujikom) {
                return [
                    'nama' => $hasilujikom->user->nama,
                    'score' => $hasilujikom->score,
                ];
            });

        return view('pageweb.ujikom.leaderboard', ['allScores' => $allScores]);
    }
}
