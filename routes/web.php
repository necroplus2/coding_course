<?php

use App\Models\Kelas;
use App\Models\Module;
use App\Models\Kategori;
use App\Models\KnowledgeContent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KnowledgeContentController;

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

// Route KELAS
Route::get('/kelas', function() {
    return view('course.kelas', [
        'kelas' => Module::all()
    ]);
});
// End Route KELAS

// Route DASHBOARD
Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth')->middleware('is.admin.menthor');
// End Route DASHBOARD

// Route DASHBOARD KELAS
Route::resource('/dashboard/module', ModuleController::class);
// Route::resource('/dashboard/module', ModuleController::class)->middleware('auth')->middleware('is.admin');
// End Route DASHBOARD KELAS

// Route DASHBOARD KATEGORI
Route::resource('/dashboard/category', CategoryController::class)->middleware('auth')->middleware('is.admin.menthor');
// End Route DASHBOARD KATEGORI

// Route DASHBOARD MATERI
Route::resource('/dashboard/content', KnowledgeContentController::class)->middleware('auth')->middleware('is.admin.menthor');
// End Route DASHBOARD MATERI

// Route MASUK
Route::get('/masuk', function() {
    return view('masuk');
})->middleware('guest');
Route::post('/masuk', [UserController::class, 'masuk'])->name('login');
// End Route MASUK

// Route LOGOUT
Route::post('/logout', [UserController::class, 'logout']);
// End Route LOGOUT

// Route DAFTAR
Route::get('/daftar', function() {
    return view('daftar');
})->middleware('guest');
Route::post('/daftar', [UserController::class, 'daftar']);
// End Route DAFTAR

Route::get('/blog/{module:id}', [ModuleController::class, 'show']);


// Route::get('/setcookie', [CookieController::class, 'setCookie']);
// Route::get('/getcookie', [CookieController::class, 'getCookie']);
