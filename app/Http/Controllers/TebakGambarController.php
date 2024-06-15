<?php

namespace App\Http\Controllers;

use App\Models\TebakGambar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TebakGambarController extends Controller
{
    // Other methods...

    public function show()
    {
        $tebakgambar = TebakGambar::all();
        return view('page.tebakgambar.index', compact('tebakgambar'));
    }

    public function getTebakGambar()
    {
        $tebakGambar = TebakGambar::all(['gambar', 'jawaban', 'petunjuk']);
        return response()->json([
            'images' => $tebakGambar
        ]);
    }

    public function create()
    {
        return view('page.tebakgambar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
            'jawaban' => 'required|string|max:255',
            'petunjuk' => 'nullable|string|max:255',
        ]);

        // Handle the image upload
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $gambarPath = $request->file('gambar')->move(public_path('tebakgambar'), $imageName);
            $gambarPath = 'tebakgambar/' . $imageName;
        }

        TebakGambar::create([
            'gambar' => $gambarPath,
            'jawaban' => $request->jawaban,
            'petunjuk' => $request->petunjuk,
        ]);

        Alert::success('Berhasil', 'Data berhasil disimpan!');
        return redirect()->route('tebakgambar.show');
    }

    public function edit($id)
    {
        $tebakgambar = TebakGambar::findOrFail($id);
        return view('page.tebakgambar.update', compact('tebakgambar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            'jawaban' => 'required|string|max:255',
            'petunjuk' => 'nullable|string|max:255',
        ]);

        $tebakgambar = TebakGambar::findOrFail($id);

        // Handle the image upload
        if ($request->hasFile('gambar')) {
            $imageName = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $gambarPath = $request->file('gambar')->move(public_path('tebakgambar'), $imageName);
            $gambarPath = 'tebakgambar/' . $imageName;

            // Delete the old image
            if (file_exists(public_path($tebakgambar->gambar))) {
                unlink(public_path($tebakgambar->gambar));
            }

            $tebakgambar->gambar = $gambarPath;
        }

        $tebakgambar->jawaban = $request->jawaban;
        $tebakgambar->petunjuk = $request->petunjuk;
        $tebakgambar->save();

        Alert::success('Berhasil', 'Data berhasil diupdate!');
        return redirect()->route('tebakgambar.show');
    }

    public function destroy($id)
    {
        $tebakgambar = TebakGambar::findOrFail($id);

        // Delete the image file
        if (file_exists(public_path($tebakgambar->gambar))) {
            unlink(public_path($tebakgambar->gambar));
        }

        $tebakgambar->delete();

        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect()->route('tebakgambar.show');
    }
}
