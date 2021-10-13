<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Admin\JunkCategoryController as AdminJunkCategoryController;
use App\Http\Controllers\Admin\JunkController as AdminJunkController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PenjualController as AdminPenjualController;
use App\Http\Controllers\Admin\PengepulController as AdminPengepulController;
use App\Http\Controllers\Penjual\OrderController as PenjualOrderController;
use App\Http\Controllers\Pengepul\OrderController as PengepulOrderController;

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


Route::get('/', [CompanyController::class, 'index'])->name('home');
Route::get('home', [CompanyController::class, 'index'])->name('home.index');
Route::get('about', [CompanyController::class, 'about'])->name('about');
Route::get('contact', [CompanyController::class, 'contact'])->name('contact');
Route::get('service', [CompanyController::class, 'service'])->name('service');
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'showLoginUser'])->name('user.show.login');
    Route::post('login', [AuthController::class, 'login'])->name('user.post.login');
    Route::get('register', [AuthController::class, 'showRegister'])->name('user.show.register');
    Route::post('register', [AuthController::class, 'register'])->name('user.post.register');
});

Route::group(['prefix'=>'admin','as'=>'admin.'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::middleware(['guest'])->group(function () {
        Route::get('login', [AuthController::class, 'showLoginAdmin'])->name('show.login');
        Route::post('login', [AuthController::class, 'login'])->name('post.login');
    });
    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.dashboard');
        });
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('order')->group(function () {
            Route::get('/', [AdminOrderController::class, 'index'])->name('order');
        });
        Route::prefix('pengepul')->group(function () {
            Route::get('/', [AdminPengepulController::class, 'index'])->name('pengepul');
        });
        Route::prefix('penjual')->group(function () {
            Route::get('/', [AdminPenjualController::class, 'index'])->name('penjual');
        });
        Route::prefix('kategori-barang')->group(function () {
            Route::get('/', [AdminJunkCategoryController::class, 'index'])->name('kategori.barang');
            Route::post('/', [AdminJunkCategoryController::class, 'store'])->name('kategori.barang.store');
            Route::get('/add', [AdminJunkCategoryController::class, 'create'])->name('kategori.barang.create');
            Route::get('/edit/{id}', [AdminJunkCategoryController::class, 'edit'])->name('kategori.barang.edit');
            Route::put('/{id}', [AdminJunkCategoryController::class, 'update'])->name('kategori.barang.update');
            Route::delete('/{id}', [AdminJunkCategoryController::class, 'destroy'])->name('kategori.barang.destroy');
        });
        Route::prefix('barang')->group(function () {
            Route::get('/', [AdminJunkController::class, 'index'])->name('barang');
            Route::post('/', [AdminJunkController::class, 'store'])->name('barang.store');
            Route::get('/add', [AdminJunkController::class, 'create'])->name('barang.create');
            Route::get('/edit/{id}', [AdminJunkController::class, 'edit'])->name('barang.edit');
            Route::put('/{id}', [AdminJunkController::class, 'update'])->name('barang.update');
            Route::delete('/{id}', [AdminJunkController::class, 'destroy'])->name('barang.destroy');
        });
    });
});

Route::group(['prefix'=>'penjual','as'=>'penjual.'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::middleware(['auth', 'is_penjual'])->group(function () {
        Route::get('/', function () {
            return redirect()->route('penjual.dashboard');
        });
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('order')->group(function () {
            Route::get('/', [PenjualOrderController::class, 'index'])->name('order');
        });
    });
});

Route::group(['prefix'=>'pengepul','as'=>'pengepul.'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::middleware(['auth', 'is_pengepul'])->group(function () {
        Route::get('/', function () {
            return redirect()->route('pengepul.dashboard');
        });
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('order')->group(function () {
            Route::get('/', [PengepulOrderController::class, 'index'])->name('order');
        });
    });
});
