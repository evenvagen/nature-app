<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/profile/{id}', [UserController::class, 'show'])->name('user.visitprofile');
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::view('/messages', 'user.messages')->name('user.messages');
