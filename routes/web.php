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
    return view('welcome');
});

Route::get('/home', function() {
    return view('course.index');
});

Route::get('/about', function() {
    return view('course.about');
});

Route::get('/blog', function() {
    return view('course.blog');
});

Route::get('/contact', function() {
    return view('course.contact');
});

Route::get('/marketing', function() {
    return view('course.marketing');
});

Route::get('/dashboard', function() {
    return view('dashboard.index');
});

Route::get('/dashboard/kelas', function() {
    return view('dashboard.kelas.index');
});

Route::get('/dashboard/kelas/tambah', function() {
    return view('dashboard.kelas.tambah');
});

Route::get('/dashboard/kelas/ubah', function() {
    return view('dashboard.kelas.ubah');
});

Route::get('/dashboard/kategori', function() {
    return view('dashboard.kategori.index');
});

Route::get('/dashboard/kategori/tambah', function() {
    return view('dashboard.kategori.tambah');
});

Route::get('/dashboard/kategori/ubah', function() {
    return view('dashboard.kategori.ubah');
});
