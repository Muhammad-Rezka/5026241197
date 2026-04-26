<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
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
