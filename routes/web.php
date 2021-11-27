<?php

use App\Http\Controllers\Auth\AuthenticationController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('prox-homepage');


Route::get('/member/dashboard',function (){
   return view('Member.dashboard');
});

Route::get('/admin/dashboard',function (){
    return view('Admin.dashboard');
});

require __DIR__.'/authentication.php';
