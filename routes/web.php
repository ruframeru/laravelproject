<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;

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

/*
bikin dashboard controller
bikin login dan regist
*/

Route::get('/', function () {
    return view('daftar.login');
});

Auth::routes();

Route::get('/Dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard');

Route::group(['middleware' => 'role:admin'], function () {
    Route::get('/Siswa', [SiswaController::class, 'index']);
    Route::get('/Siswa/{id}/edit', [SiswaController::class, 'edit']);
    Route::post('/Siswa/update', [SiswaController::class, 'update']);

    Route::get('/Guru', [GuruController::class, 'index']);
    Route::get('/Guru/tambah', [GuruController::class, 'tambah']);
    Route::post('/Guru', [GuruController::class, 'inputtambah']);

    Route::get('/Kelas', [KelasController::class, 'index']);
    Route::post('/Kelas/tambah', [KelasController::class, 'tambah']);

});


Route::group(['middleware' => 'role:siswa'], function(){
    Route::get('/myprofile', [ProfileController::class, 'index']);
});

