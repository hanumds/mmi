<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    if (Auth::check()) {
        // Jika sudah login, arahkan ke dashboard
        return redirect()->route('dashboard');
    } else {
        // Jika belum login, arahkan ke halaman about
        return redirect()->route('about');
    }
});
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
// Route::get('/postech/{sklh}/cek', [HaiController::class, 'index']);

// Route::get('/', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::get('user-export', [UserController::class, 'export'])->name('user-export');
    Route::post('user-import', [UserController::class, 'import'])->name('user-import');

    Route::resource('products', ProductController::class);
    Route::get('/tampil-produk', [ProductController::class, 'tampilProduk'])->name('products.tampil');
    Route::resource('sellings', SellingController::class);
    Route::get('report/sellings', [SellingController::class, 'report'])->name('sellings-report');

});
