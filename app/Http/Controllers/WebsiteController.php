<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function menu(){
        return view('pageweb.menu');
    }
    public function belajar(){
        return view('pageweb.belajar');
    }

    
    public function tatasurya(){
        return view('pageweb.belajar.tatasurya');
    }
    public function rotasibumi(){
        return view('pageweb.belajar.rotasibumi');
    }
    public function revolusibumi(){
        return view('pageweb.belajar.revolusibumi');
    }
    
    public function siangmalam(){
        return view('pageweb.rotasibumi.siangmalam');
    }
    public function arahangin(){
        return view('pageweb.rotasibumi.arahangin');
    }
    public function zonawaktu(){
        return view('pageweb.rotasibumi.zonawaktu');
    }
    
    public function musim(){
        return view('pageweb.revolusibumi.musim');
    }
    public function rasibintang(){
        return view('pageweb.revolusibumi.rasibintang');
    }


    // ujikom
    public function ujikom(){
        return view('pageweb.ujikom.ujikom');
    }
    public function showujikom(){
        return view('pageweb.ujikom.show');
    }
    public function showleaderboard(){
        return view('pageweb.ujikom.leaderboard');
    }
    // ujikom
    
    // tebakgambar
    public function tebakgambar(){
        return view('pageweb.tebakgambar.tebakgambar');
    }
    // tebakgambar
    
    public function test(){
        return view('pageweb.test');
    }



}
