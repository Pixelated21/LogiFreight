<?php

use App\Http\Controllers\Auth\AuthenticationController;

Route::get('/register',[AuthenticationController::class,'registerIndex'])->name('register');
Route::get('/login',[AuthenticationController::class,'loginIndex'])->name('login');
Route::post('/logout',[AuthenticationController::class,'logout'])->name('logout');
