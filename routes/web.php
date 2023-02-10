<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tambahController;
use App\Http\Controllers\regisController;







Route::get('/login',[regisController::class,'loginpage']);
Route::get('/register',[regisController::class,'index']);
Route::post('/prosesregis',[regisController::class,'tambahRegis']);
Route::post('/prosesLogin',[regisController::class,'login']);


Route::post('/logout',[regisController::class,'logout']);


Route::get('/',[tambahController::class,'index']);
Route::get('/tambah',[tambahController::class,'tambahform']);
Route::post('/tambahdata',[tambahController::class,'simpanData']);
Route::any('/hapus/{id}',[tambahController::class,'hapusData'])->name('hapus');
Route::get('/ubah/{id}',[tambahController::class,'ubah']);
Route::put('/perbaharui/{id}',[tambahController::class,'data']);


