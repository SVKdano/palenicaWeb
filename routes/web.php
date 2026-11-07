<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/palenica', function () {
    return view('palenica');
})->name('palenica');

Route::get('/palenica/kontakt', function () {
    return view('palenica.kontakt');
})->name('palenica.kontakt');

Route::get('/mustaren', function () {
    return view('mustaren');
})->name('mustaren');

Route::get('/mustaren/kontakt', function () {
    return view('mustaren.kontakt');
})->name('mustaren.kontakt');
