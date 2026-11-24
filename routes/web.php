<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\CSZ@index');
Route::get('/barang', 'App\Http\Controllers\CSZ@barang')->name('barang.index');
Route::get('/tambahbarang', 'App\Http\Controllers\CSZ@add');
Route::post('/aksiTambah', 'App\Http\Controllers\CSZ@Actadd')