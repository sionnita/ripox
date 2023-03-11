<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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
Route::get('/topup/{id}', [HomeController::class, 'topup'])->name('topup');

Route::get('/akungame', function () {
    return view('akungame');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});
