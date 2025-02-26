<?php

use App\Http\Controllers\AdminController;
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
    return view('landing');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/manajemen', function () {
        return view('manajemen-barang');
    })->name('manajemen');

    Route::get('/user', function () {
        return view('user');
    })->name('user');

    Route::get('/barang/edit/{id}',[AdminController::class,'edit'] ) ->name('barang.edit');

    Route::get('/barang/tambah/{id}',[AdminController::class,'update'] ) ->name('barang.update');

    Route::get('/barang/tambah/{id}',[AdminController::class,'create'] ) ->name('barang.tambah');




});  
