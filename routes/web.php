<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\CSZ@index');
Route::get('/barang', 'App\Http\Controllers\CSZ@barang');