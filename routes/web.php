<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/produk', function () {
    // Array data produk
    $produk = [
        ['kode' => 'BRG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BRG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000],
    ];

    // Kirim ke view produk.blade.php
    return view('produk', ['produk' => $produk]);
});

// Route untuk form tambah produk
Route::get('/produk/tambah', function () {
    // Array jenis produk
    $jenisProduk = ['Alat tulis', 'Elektronik', 'Sembako'];

    // Kirim ke view tambah-produk.blade.php
    return view('tambah-produk', ['jenisProduk' => $jenisProduk]);
});

// Route untuk menyimpan produk (contoh saja)
Route::post('/produk/simpan', function (Illuminate\Http\Request $request) {
    // Untuk demo, tampilkan data yang dikirim
    dd($request->all());
});
