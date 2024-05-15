<?php

use App\Http\Controllers\User1Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user1', User1Controller::class);