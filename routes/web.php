<?php

use Illuminate\Support\Facades\Route;

Route::get('/{nama}/{nilai}', function ($nama,$nilai) {
    // $mapel = ['Matematika','IPAS'];
    $mapel = [
        ['nama' => 'Matematika','guru' => 'Pak Vian'],
        ['nama' => 'IPAS','guru' => 'Pak De'],
    ];
    return view('home',[
        'nama' => $nama,
        'mapel' => $mapel,
        'nilai' => $nilai
    ]);
});


Route::get('/about', function () {
    return 'Halo, Cihuy';
});

Route::get('/about/{nama}', function ($nama) {
    return 'Halo ' . $nama;
});
