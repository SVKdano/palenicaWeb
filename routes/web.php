<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/palenica', function () {
    return view('palenica');
})->name('palenica');
