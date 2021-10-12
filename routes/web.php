<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('menu.beranda');
// });

Route::get('/', [MenuController::class, 'index'])->name('index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category-junk', App\Http\Controllers\CategoryJunkController::class);
Route::resource('junk', App\Http\Controllers\JunkController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('registrasi', [MenuController::class, 'registrasi'])->name('registrasi-user');
Route::get('login-user', [MenuController::class, 'loginUser'])->name('login-user');
Route::get('layanan', [MenuController::class, 'layanan'])->name('layanan');
Route::get('kontak', [MenuController::class, 'kontak'])->name('kontak');
Route::get('tentang', [MenuController::class, 'tentang'])->name('tentang');
Route::get('marketplace', [MenuController::class, 'marketplace'])->name('marketplace');
