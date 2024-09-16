<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/profiledosen', function () {
    return view('profiledosen');
});

Route::get('/datamahasiswa', function () {
    return view('datamahasiswa');
});

Route::get('/logbookdosen', function () {
    return view('logbookdosen');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/bimbingandosen', function () {
    return view('bimbingandosen');
});

Route::get('/laporandosen', function () {
    return view('laporandosen');
});

Route::get('/penilaiandosen', function () {
    return view('penilaiandosen');
});
