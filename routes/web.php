<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProvinsiController;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Pegawai;
use App\Models\Provinsi;
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

Route::get('/', function () {
    $kecamatan  = Kecamatan::all();
    $provinsi  = Provinsi::all();
    $kelurahan  = Kelurahan::with('kecamatan')->get();
    $pegawai  = Pegawai::with('kecamatan', 'p', 'kelurahan')->get();
    return view('welcome', compact(['pegawai', 'kelurahan', 'kecamatan', 'provinsi']));
});

Route::post('/kecamatan/store', [KecamatanController::class, 'store']);
Route::get('/kecamatan/edit/{id}', [KecamatanController::class, 'edit']);
Route::post('/kecamatan/update/{id}', [KecamatanController::class, 'update']);
Route::get('/kecamatan/store/{id}', [KecamatanController::class, 'delete']);


Route::post('/provinsi/store', [ProvinsiController::class, 'store']);
Route::get('/provinsi/edit/{id}', [ProvinsiController::class, 'edit']);
Route::post('/provinsi/update/{id}', [ProvinsiController::class, 'update']);
Route::get('/provinsi/store/{id}', [ProvinsiController::class, 'delete']);

Route::post('/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
Route::post('/kelurahan/update/{id}', [KelurahanController::class, 'update']);
Route::get('/kelurahan/store/{id}', [KelurahanController::class, 'delete']);

Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/store/{id}', [PegawaiController::class, 'delete']);
