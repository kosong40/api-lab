<?php

use Illuminate\Http\Request;
use App\Pengguna;


Route::get('/pengguna','PenggunaController@getMhs');
Route::get('/pengguna/{id_pengguna}','PenggunaController@mhsDetail');
Route::post('/login','PenggunaController@LoginMhs');

