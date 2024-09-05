<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/votar/{token}', 'poll')->name('poll-with-token');
Route::view('/votar/', 'poll-login');
