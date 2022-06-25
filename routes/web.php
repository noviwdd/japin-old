<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login\LoginController;

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

Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Route::prefix('login')->namespace('Login')->group(function(){
    Route::get('/',[LoginController::class, 'index'])->name('login');
    Route::post('store', [LoginController::class, 'login']);
});

Route::get('/signup', function(){return view('auth.signup');});
Route::get('/materi', function(){ return view('user.materi.materi'); });
Route::get('/materi/submateri', function(){ return view('user.materi.submateri'); });
Route::get('/materi/bangun-datar', function(){ return view('user.materi.content-materi'); });
Route::get('/materi/bangun-datar/rumus', function(){ return view('user.materi.rumus-materi'); });
Route::get('/materi/bangun-datar/kuis', function(){ return view('user.kuis.kuis'); });
Route::get('/nilai', function(){ return view('user.nilai.nilai'); });
Route::get('/profil', function(){ return view('user.profile'); });
