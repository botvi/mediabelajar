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

public function leaderboardtebakgambar()
{
    // Ambil data dari model Hasiltebakgambar dengan relasi user dan urutkan berdasarkan waktu
    $allWaktu = Hasiltebakgambar::with('user')
        ->orderBy('waktu', 'asc')
        ->get();

    // Format waktu
    $formattedWaktu = $allWaktu->map(function ($item) {
        $item->waktu = $this->formatTime($item->waktu);
        return $item;
    });

    return view('pageweb.tebakgambar.leaderboard', ['allWaktu' => $formattedWaktu]);
}
// ADMIN
public function scoretebakgambar()
{
    // Ambil data dari model Hasiltebakgambar dengan relasi user dan urutkan berdasarkan waktu
    $allWaktu = Hasiltebakgambar::with('user')
        ->orderBy('waktu', 'asc')
        ->get();

    // Format waktu
    $formattedWaktu = $allWaktu->map(function ($item) {
        $item->waktu = $this->formatTime($item->waktu);
        return $item;
    });

    return view('page.scoretebakgambar.index', ['allWaktu' => $formattedWaktu]);
}
// ADMIN


private function formatTime($seconds)
{
    if ($seconds < 60) {
        return $seconds . ' detik';
    } else {
        $minutes = floor($seconds / 60);
        $remainingSeconds = $seconds % 60;
        return sprintf('%02d:%02d menit', $minutes, $remainingSeconds);
    }
}

}
