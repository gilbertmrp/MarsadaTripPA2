<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestimonialController;

//login
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/login/post', [LoginController::class, 'indexlogin']);
//register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/post',[RegisterController::class, 'store']);




Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

    //addmobil
    Route::get('/mobil', [MobilController::class, 'index'])->name('admin.mobil.index');
    Route::get('/mobil/add', [MobilController::class, 'addMobil'])->name('admin.mobil.add');
    Route::post('/mobil/add-process', [MobilController::class, 'addMobilProcess'])->name('admin.mobil.add.process');
    Route::get('/mobil/delete/{id}', [MobilController::class, 'delete']);

    //testimoni
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('admin.testimonial.index');
    Route::get('/testimonial/add', [TestimonialController::class, 'addTesti'])->name('admin.testimonial.add');
    //semua route dalam grup ini hanya bisa diakses oleh operator
});

Route::middleware(['auth', 'role:user'])->group(function(){
    Route::get('/home',[UserController::class, 'getdata'])->name('user.index');

    //booking
    Route::get('/booking',[UserController::class, 'index'])->name('user.form-user.create_booking');
    Route::post('/booking/add-process',[UserController::class, 'addbooking'])->name('user.form-user.create_booking.process');

    //feedback
    Route::post('/feedback', [FeedbackController::class, 'store']);


});
