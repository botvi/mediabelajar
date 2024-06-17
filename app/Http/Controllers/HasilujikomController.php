<?php

namespace App\Http\Controllers;

use App\Models\Hasilujikom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HasilujikomController extends Controller
{
    /**
     * Save the quiz score into the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveScore(Request $request)
    {
        // Validate the request
        $request->validate([
            'score' => 'required|integer',
        ], [
            'score.required' => 'The score field is required.',
            'score.integer' => 'The score must be an integer.',
        ]);

        try {
            // Save the score to the database
            $quizResult = new Hasilujikom();
            $quizResult->user_id = Auth::id(); // Adjust how you save user_id based on your authentication method
            $quizResult->score = $request->score;
            $quizResult->save();

            // Return JSON response on success
            return response()->json([
                'message' => 'Score saved successfully',
                'score' => $quizResult->score,
            ]);
        } catch (\Exception $e) {
            // Handle and log any exceptions
            return response()->json([
                'message' => 'Failed to save score.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
