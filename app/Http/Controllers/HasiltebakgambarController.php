<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hasiltebakgambar;
use Illuminate\Support\Facades\Auth;

class HasiltebakgambarController extends Controller
{
    public function saveCompletionTime(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'waktu' => 'required|integer|min:0|max:100',
    ]);

    // Get the authenticated user
    $user = Auth::user();

    // Find existing record or create new if not exist
    $hasil = Hasiltebakgambar::where('user_id', $user->id)->firstOrNew();
    $hasil->user_id = $user->id;

    // Check if existing waktu is null or greater than new waktu
    if (!$hasil->waktu || $request->waktu < $hasil->waktu) {
        $hasil->waktu = $request->waktu;
        $hasil->save();
    }

    return response()->json(['message' => 'waktu saved successfully']);
}

}
