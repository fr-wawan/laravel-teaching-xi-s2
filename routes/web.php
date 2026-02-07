<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function () {
    return 'Halo, Cihuy';
});

Route::get('/about/{nama}',function ($nama) {
    return 'Halo ' . $nama;
});