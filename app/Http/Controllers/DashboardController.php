<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\TebakGambar;
use App\Models\Ujikom;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboard(){
    $tebakgambar = TebakGambar::count();
    $ujikompetensi = Ujikom::count();

       return view('page.dashboard.dashboard',compact('tebakgambar','ujikompetensi'));
   }
}
