<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/profile', 'user.profile')->name('user.profile');
Route::view('/messages', 'user.messages')->name('user.messages');
