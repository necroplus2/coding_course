<?php

use App\Models\Module;
use App\Models\KnowledgeContent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EffortController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomFuncController;
use App\Http\Controllers\PageModuleController;
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

// Route MATERI
// Route::get('/materi/{knowledge_content:id}', [PageModuleController::class, 'index']);
// End Route MATERI
// Route MATERI
Route::get('/module/{module}/content/{knowledge_content}', [PageModuleController::class, 'index']);
// End Route MATERI

// Route KELAS
Route::get('/kelas', function() {
    return view('course.kelas', [
        'kelass' => \App\Models\Module::paginate(4)->withQueryString(),
    ]);
});
// End Route KELAS

// Route ABOUT
Route::get('/about', function() {
    return view('course.about');
});
// End Route ABOUT

// // Route KELAS
// Route::get('/kelas', function() {
//     return view('course.kelas', [
//         'kelas' => Module::all()
//     ]);
// });
// // End Route KELAS

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

// Route DASBOR / user
Route::get('/dasbor', [EffortController::class, 'userEffort']);
// Route End DASBOR

// Route Deskripsi KELAS
Route::get('/kelas/{module:id}', [PageModuleController::class, 'description_module']);
// Route End Deskripsi KELAS

// Route Next Content/sub bab for Efforts Table
Route::post('/module/next', [EffortController::class, 'next_content']);
// end

// Route::get('/blog/{module:id}', [ModuleController::class, 'show']);


// Route::get('/setcookie', [CookieController::class, 'setCookie']);
// Route::get('/getcookie', [CookieController::class, 'getCookie']);
