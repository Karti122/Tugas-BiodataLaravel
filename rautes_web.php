<?php

use Illuminate\Support\Facades\Route;

Route::get('/biodata', function () {
    $biodata = [
        'nama' => 'Kartika Hastuti',
        'ttl' => 'Lantan,31-08-04',
        'jenis_kelamin' => 'Perempuan',
        'alamat' => 'Lantan',
        'email' => 'kartika@gmail.com',
        'telepon' => '0812-3456-7890',
        'hobi' => 'Membaca, Menulis, Coding'
    ];

    return view('biodata', compact('biodata'));
});
