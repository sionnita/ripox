<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class,'show'])->name('login');
Route::post('/simpan-login', [LoginController::class,'login'])->name('login.perform');

Route::group(['prefix' => 'topup', 'as' => 'topup.'], function () {
    Route::get('/{id}', [HomeController::class, 'topup'])->name('index');
    Route::post('/getTotal', [GameController::class, 'getTotal'])->name('total');
    Route::post('/save', [GameController::class, 'save'])->name('save');
});

Route::group(['prefix' => 'akun', 'as' => 'akun.'], function () {
    Route::get('/{id}', [HomeController::class, 'akun'])->name('index');
    Route::get('/detail/{id}', [HomeController::class, 'akunDetail'])->name('detail');
    Route::get('/beli/{id}', [HomeController::class, 'akunBeli'])->name('beli');
    Route::post('/save', [AccountController::class, 'save'])->name('save');
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/game', [AdminController::class, 'viewGame'])->name('game');
    Route::group(['prefix' => 'akun', 'as' => 'akun.'], function () {
        Route::get('/', [AdminController::class, 'viewAkun'])->name('view');
        Route::get('/form/{id}', [AdminController::class, 'formAkun'])->name('form');
        Route::post('/save', [AdminController::class, 'saveAkun'])->name('save');
        Route::get('/status/{id}', [AdminController::class, 'statusAkun'])->name('status');
        Route::post('/edit', [AdminController::class, 'editAkun'])->name('edit');
        Route::get('/bayar/{id}', [AdminController::class, 'bayarAkun'])->name('bayar');
        Route::get('/cancel/{id}', [AdminController::class, 'cancelAkun'])->name('cancel');
    });
    Route::group(['prefix' => 'topup', 'as' => 'topup.'], function () {
        Route::get('/', [AdminController::class, 'viewTopup'])->name('view');
        Route::get('/form/{id}', [AdminController::class, 'formTopup'])->name('form');
        Route::post('/save', [AdminController::class, 'saveTopup'])->name('save');
        Route::get('/status/{id}', [AdminController::class, 'statusTopup'])->name('status');
        Route::post('/edit', [AdminController::class, 'editTopup'])->name('edit');
        Route::get('/bayar/{id}', [AdminController::class, 'bayarTopup'])->name('bayar');
        Route::get('/cancel/{id}', [AdminController::class, 'cancelTopup'])->name('cancel');
    });
});

Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// Route::get('/akungame', function () {
//     return view('akungame');
// });

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/faq', function () {
    return view('faq');
});