<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\KeranjangBelanjaController ;
use App\Http\Controllers\NilaiKuliahController ;
use App\Http\Controllers\sirupController ;
use App\Http\Controllers\nilaiPesertaController ;



Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('Pert5', function () {
    return view('Pertemuan5');
});
Route::get('Pert1', function () {
    return view('Pertemuan1');
});
Route::get('Pert2', function () {
    return view('Pertemuan2');
});
Route::get('Pert3', function () {
    return view('Pertemuan3');
});
Route::get('TPert3', function () {
    return view('Tugaspert3');
});
Route::get('Pert4', function () {
    return view('Pertemuan4');
});
Route::get('Pert5index', function () {
    return view('Pertemuan5index');
});
Route::get('Tugaspert5', function () {
    return view('TugasLinkTree');
});
Route::get('Pert6', function () {
    return view('Pertemuan6');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']); //ganti manteman
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
//crud table pegawai
Route::get('/pegawai/', [PegawaiDBController::class, 'index']);
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaController::class, 'store']);

Route::get('/NilaiKuliah', [NilaiKuliahController::class, 'index']);
Route::get('/NilaiKuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/NilaiKuliah/store', [NilaiKuliahController::class, 'store']);

Route::get('/sirup', [sirupController::class, 'index']);
Route::get('/sirup/create', [sirupController::class, 'create']);
Route::post('/sirup', [sirupController::class, 'store']);
Route::get('/sirup/{kodesirup}/edit', [sirupController::class, 'edit']);
Route::put('/sirup/{kodesirup}', [sirupController::class, 'update']);
Route::delete('/sirup/{kodesirup}', [sirupController::class, 'destroy']);

Route::get('/eas', [nilaiPesertaController::class, 'index']);
Route::get('/eas/tambah', [nilaiPesertaController::class, 'tambah']);

