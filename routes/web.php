<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/home', function () {
    return view('user.index');
});

Route::get('/mobil', [MobilController::class, 'index'])->name('admin.mobil.index');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial.index');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admim.index');
    // untuk halaman admin
});

Route::prefix('user')->middleware(['auth', 'user'])->group(function() {
    Route::get('/home', [UserController::class, 'index'])->name('user.index');
    // untuk halaman user
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
