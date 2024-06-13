<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TebakGambar;

class TebakGambarController extends Controller
{
    public function create(){
        return view ('page.tebakgambar.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'answer' => 'required|string|max:255',
            'clue' => 'required|string',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->storeAs('public/tebakgambar', $imageName);

        TebakGambar::create([
            'image' => $imageName,
            'answer' => $request->answer,
            'clue' => $request->clue,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}
