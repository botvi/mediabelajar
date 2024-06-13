<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    WebsiteController,
    UjikomController,
    TebakGambarController
};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// web.php

Route::get('/music-frame', function () {
    return view('music-frame');
});


// ADMIN
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

// UJIKOM
Route::get('/ujikompetensi', [UjikomController::class, 'show'])->name('ujikom.show');
Route::get('/getujikom', [UjikomController::class, 'index']);
Route::get('/ujikompetensi/create', [UjikomController::class, 'create'])->name('ujikom.create');
Route::post('/ujikom', [UjikomController::class, 'store'])->name('ujikom.store');
// UJIKOM
// TEBAKGAMBAR
Route::get('/tebakgambar/create', [TebakGambarController::class, 'create'])->name('tebakgambar.create');
Route::post('/tebakgambar', [TebakGambarController::class, 'store'])->name('tebakgambar.store');
// TEBAKGAMBAR
// ADMIN

// WEBSITE
Route::get('/', [WebsiteController::class, 'menu']);
Route::get('/belajar', [WebsiteController::class, 'belajar']);

Route::get('/rotasibumi', [WebsiteController::class, 'rotasibumi']);
Route::get('/tatasurya', [WebsiteController::class, 'tatasurya']);
Route::get('/revolusibumi', [WebsiteController::class, 'revolusibumi']);

Route::get('/arahangin', [WebsiteController::class, 'arahangin']);
Route::get('/zonawaktu', [WebsiteController::class, 'zonawaktu']);
Route::get('/siangmalam', [WebsiteController::class, 'siangmalam']);

Route::get('/musim', [WebsiteController::class, 'musim']);
Route::get('/rasibintang', [WebsiteController::class, 'rasibintang']);
Route::get('/geraksemu', [WebsiteController::class, 'geraksemu']);


// ujikom
Route::get('/ujikom', [WebsiteController::class, 'ujikom']);
// ujikom

// belajar
Route::get('/bermain', [WebsiteController::class, 'tebakgambar']);
// belajar

// WEBSITE

// Route::get('/test', [WebsiteController::class, 'test']);
