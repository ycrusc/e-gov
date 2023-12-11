<?php

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [
    App\Http\Controllers\HomepageController::class, 'index'
]);




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return "halo nama saya saya";
// });

// Route::get('/latihan', [
//     App\Http\Controllers\LatihanController::class, 'index'
// ]);

// Route::get('/blog/{id}', [
//     App\Http\Controllers\LatihanController::class, 'blog'
// ]);

// Route::get('/beranda', [
//     App\Http\Controllers\LatihanController::class, 'beranda'
// ]);

Route::get('/', [
    App\Http\Controllers\HomepageController::class, 'index'
]);

Route::get('/about', [
    App\Http\Controllers\HomepageController::class, 'about'
]);

Route::get('/kontak', [
    App\Http\Controllers\HomepageController::class, 'kontak'
]);

Route::get('/kategori', [
    App\Http\Controllers\HomepageController::class, 'kategori'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [
        App\Http\Controllers\DashboardController::class, 'index'
    ])->name('admin');

    Route::resource(
        '/kategori',
        App\Http\Controllers\CategoryController::class
    );

    Route::resource(
        '/produk',
        App\Http\Controllers\ProdukController::class
    );

    Route::resource(
        '/customer',
        App\Http\Controllers\CustomerController::class
    );

    Route::resource(
        '/user',
        App\Http\Controllers\UserController::class
    );

    Route::resource(
        '/transaksi',
        App\Http\Controllers\TransaksiController::class
    );

    Route::resource(
        '/laporan',
        App\Http\Controllers\LaporanController::class
    );
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
