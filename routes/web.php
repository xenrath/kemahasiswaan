<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('visi-misi', function () {
    return view('visi-misi');
});

Route::get('struktur-organisasi', function () {
    return view('struktur-organisasi');
});

Route::get('survei', function () {
    return view('survei');
});

Route::get('ormawa', function () {
    return view('ormawa');
});

Route::get('loker', function () {
    return view('loker');
});

Route::get('kontak', function () {
    return view('kontak');
});

Route::get('galeri', function () {
    return view('galeri');
});