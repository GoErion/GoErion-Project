<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index'])
    ->name('home');
Route::get('register',[RegisterController::class,'index'])
     ->name('register');
Route::post('register',[RegisterController::class,'store'])
    ->name('register.store');
Route::get('login',[LoginController::class,'index'])
    ->name('login');
Route::get('dashboard',[IndexController::class,'dashboard'])
    ->name('dashboard');
