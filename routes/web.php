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

//user
Route::get('/home', function () {
    return view('user.index');
});
//



Route::get('/mobil', [MobilController::class, 'index'])->name('admin.mobil.index');
Route::get('/mobil/add', [MobilController::class, 'addMobil'])->name('admin.mobil.add');
Route::post('/mobil/add-process', [MobilController::class, 'addMobilProcess'])->name('admin.mobil.add.process');


Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
Route::get('/testimonial/add', [TestimonialController::class, 'addTesti'])->name('admin.testimonial.add');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admim.index');
    // untuk halaman admin
});

Route::prefix('user')->middleware(['auth', 'user'])->group(function() {
    Route::get('/home', [UserController::class, 'index'])->name('user.index');
    // untuk halaman user
});


Route::get('/booking',[UserController::class, 'index'])->name('user.form-user.create_booking');
Route::post('/booking/add-process',[UserController::class, 'addbooking'])->name('user.form-user.create_booking.process');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
