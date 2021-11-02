<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MenuController;

Route::get('/tampil_mahasiswa', function () {
    return view('datamahasiswa');
});

//Routing buku
Route::get('/formulir', [BukuController::class, 'formulir']);
Route::post('/formulir/proses', [BukuController::class, 'formulir_proses']);

Route::get('/menumakan', [MenuController::class, 'menu']);
Route::post('/formulir', [MenuController::class, 'proses_pesanan']);

?>