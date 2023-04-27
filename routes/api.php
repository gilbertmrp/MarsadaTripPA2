<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAPIController;
use App\Http\Controllers\API\MobilAPIController;

Route::get('/mobil', [MobilAPIController::class, 'index']);

Route::post('/register', [UserAPIController::class, 'register']);
Route::post('/login', [UserAPIController::class, 'login']);
Route::post('/logout', [UserAPIController::class, 'logout']);   
