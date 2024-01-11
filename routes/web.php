<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peminjamController;

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
    return view('index');
});


Route::get('/form',[peminjamController::class,'peminjaman']);
Route::post('/formAdd',[peminjamController::class,'peminjamanAdd']);
Route::get('/formDelete/{id}',[peminjamController::class,'formDelete']);
Route::get('/formEdit/{id}',[peminjamController::class,'formEdit']);
Route::post('/formUpdate/{id}',[peminjamController::class,'formUpdate']);

Route::get('/dataPeminjam',[peminjamController::class,'dataPeminjam']);





