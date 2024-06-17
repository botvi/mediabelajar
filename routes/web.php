<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    DashboardController,
    WebsiteController,
    UjikomController,
    TebakGambarController,
    RegisterController,
    LoginController,
    HasilujikomController,
    HasiltebakgambarController
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

// AUTH
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');
// AUTH

// ADMIN routes
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    
    // UJIKOM
    Route::get('/ujikompetensi', [UjikomController::class, 'show'])->name('ujikom.show');
    Route::get('/getujikom', [UjikomController::class, 'index']);
    Route::get('/ujikompetensi/create', [UjikomController::class, 'create'])->name('ujikom.create');
    Route::post('/ujikom', [UjikomController::class, 'store'])->name('ujikom.store');
    Route::get('/ujikom/{id}/edit', [UjikomController::class, 'edit'])->name('ujikom.edit');
    Route::put('/ujikom/{id}', [UjikomController::class, 'update'])->name('ujikom.update');
    Route::delete('/ujikom/{id}', [UjikomController::class, 'destroy'])->name('ujikom.destroy');
    
    // TEBAKGAMBAR
    Route::get('/tebak-gambar', [TebakGambarController::class, 'show'])->name('tebakgambar.show');
    Route::get('/gettebakgambar', [TebakGambarController::class, 'getTebakGambar']);
    Route::get('/tebakgambar/create', [TebakGambarController::class, 'create'])->name('tebakgambar.create');
    Route::post('/tebak-gambar/store', [TebakGambarController::class, 'store'])->name('tebak-gambar.store');
    Route::get('/tebakgambar/{id}/edit', [TebakGambarController::class, 'edit']);
    Route::put('/tebakgambar/{id}', [TebakGambarController::class, 'update']);
    Route::delete('/tebakgambar/{id}', [TebakGambarController::class, 'destroy'])->name('tebakgambar.destroy');
});
// ADMIN routes

// WEBSITE
Route::get('/', [WebsiteController::class, 'menu'])->name('home');
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
    Route::get('/getujikom', [UjikomController::class, 'index']);
    Route::get('/ujikom', [WebsiteController::class, 'showujikom']);
    Route::get('/startujikom', [WebsiteController::class, 'ujikom'])->middleware('role:admin,user');
    Route::post('/save-score', [HasilujikomController::class, 'store']);
    Route::get('/leaderboard', [HasilujikomController::class, 'leaderboard']);
// ujikom

// belajar tebak gambar
Route::get('/gettebakgambar', [TebakGambarController::class, 'getTebakGambar']);
Route::get('/bermain', [WebsiteController::class, 'tebakgambar']);
Route::post('/save-completion-time', [HasiltebakgambarController::class, 'saveCompletionTime']);
// belajar tebak gambar

// WEBSITE

// Route::get('/test', [WebsiteController::class, 'test']);
