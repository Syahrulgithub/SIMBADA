<?php

use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\UserController;
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
    Route::get('/barang/edit/{id}',[BarangController::class,'edit'] ) ->name('barang.edit');
    Route::post('/barang/update/{id}',[BarangController::class,'update'] ) ->name('barang.update');
    Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

    Route::get('/user', function () {
        return view('manajemen-pengguna');
    })->name('user');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

    Route::get('/permintaanuser', function(){
        return view('manajemen-permintaan');    
    })->name('permintaan');





});  
