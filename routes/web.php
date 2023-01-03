<?php

use App\Http\Controllers\UserController;
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

// Route HOME
Route::get('/', function () {
    return view('course.index');
});
Route::get('/home', function() {
    return view('course.index');
});
// End Route HOME

// Route ABOUT
Route::get('/about', function() {
    return view('course.about');
});
// End Route ABOUT

// Route BLOG
Route::get('/blog', function() {
    return view('course.blog');
});
// End Route BLOG

// Route CONTACT
Route::get('/contact', function() {
    return view('course.contact');
});
// End Route CONTACT

// Route MARKETING
Route::get('/marketing', function() {
    return view('course.marketing');
});
// End Route MARKETING

// Route DASHBOARD
Route::get('/dashboard', function() {
    return view('dashboard.index');
});
// End Route DASHBOARD

// Route DASHBOARD KELAS
Route::get('/dashboard/kelas', function() {
    return view('dashboard.kelas.index');
});
// End Route DASHBOARD KELAS

// Route DASHBOARD KELAS TAMBAH
Route::get('/dashboard/kelas/tambah', function() {
    return view('dashboard.kelas.tambah');
});
// End Route DASHBOARD KELAS TAMBAH

// Route DASHBOARD KELAS UBAH
Route::get('/dashboard/kelas/ubah', function() {
    return view('dashboard.kelas.ubah');
});
// End Route DASHBOARD KELAS UBAH

// Route DASHBOARD KATEGORI
Route::get('/dashboard/kategori', function() {
    return view('dashboard.kategori.index');
});
// End Route DASHBOARD KATEGORI

// Route DASHBOARD KATEGORI TAMBAH
Route::get('/dashboard/kategori/tambah', function() {
    return view('dashboard.kategori.tambah');
});
// Route DASHBOARD KATEGORI TAMBAH

// Route DASHBOARD KATEGORI UBAH
Route::get('/dashboard/kategori/ubah', function() {
    return view('dashboard.kategori.ubah');
});
// Route DASHBOARD KATEGORI UBAH

// Route MASUK
Route::get('/masuk', function() {
    return view('masuk');
})->middleware('guest');
Route::post('/masuk', [UserController::class, 'masuk']);
// End Route MASUK

// Route LOGOUT
Route::post('/logout', [UserController::class, 'logout']);
// End Route LOGOUT

// Route DAFTAR
Route::get('/daftar', function() {
    return view('daftar');
});
Route::post('/daftar', [UserController::class, 'daftar']);
// End Route DAFTAR
