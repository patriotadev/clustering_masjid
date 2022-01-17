<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClusterController;
use App\Http\Controllers\KmeansController;
use App\Http\Controllers\MasjidController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenceramahController;
use App\Http\Controllers\PengujianController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Middleware\login_mid;
use App\Models\PenceramahModel;
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



Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware([login_mid::class])->group(function () {
    Route::get('/', function () {
        return redirect('/dashboard');
    });
    Route::get('/dashboard', [PageController::class, 'index']);
    Route::get('/register', [PageController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/logout', [AuthController::class, 'logout']);

    Route::prefix('masjid')->group(function () {
        Route::get('/', [PageController::class, 'dataMasjid']);
        Route::get('/tambah', [PageController::class, 'tambahMasjid']);
        Route::post('/tambah', [MasjidController::class, 'tambahData']);
        Route::get('/edit/{id}', [PageController::class, 'editMasjid']);
        Route::post('/update', [MasjidController::class, 'updateData']);
        Route::get('/delete/{kode}', [MasjidController::class, 'hapusData']);
    });

    Route::prefix('penceramah')->group(function () {
        Route::get('/', [PageController::class, 'dataPenceramah']);
        Route::get('/tambah', [PageController::class, 'tambahPenceramah']);
        Route::post('/tambah', [PenceramahController::class, 'tambahPenceramah']);
        Route::get('/edit/{id}', [PageController::class, 'editPenceramah']);
        Route::post('/update', [PenceramahController::class, 'updatePenceramah']);
        Route::get('/delete/{kode}', [PenceramahController::class, 'deletePenceramah']);
    });

    Route::prefix('clustering')->group(function () {
        Route::get('/', [PageController::class, 'dataClustering']);
        Route::post('/find', [ClusterController::class, 'getPenceramah']);
    });
    Route::post('kmeans/clustering/clean', [PerhitunganController::class, 'cleanData']);
    Route::get('/centroid', [PageController::class, 'hasil_centroid']);
    Route::get('/hasil_chart', [PageController::class, 'hasil_chart']);
    Route::get('/hasil_cluster', [PageController::class, 'hasil_cluster']);

    Route::get('/hasil/export', [PageController::class, 'exportHasilCluster']);
    Route::post('/import_penceramah', [PageController::class, 'importPenceramah']);
    Route::post('/import_masjid', [PageController::class, 'importMasjid']);

    Route::get('/maps', [PageController::class, 'peta']);

    Route::prefix('pengujian')->group(function () {
        Route::get('/', [PageController::class, 'pengujian']);
        Route::post('/', [PengujianController::class, 'hasilPengujian']);
    });

    Route::get('/kmeans', [PageController::class, 'perhitunganKmeans']);
    Route::post('/perhitungan', [PerhitunganController::class, 'hitungData']);
});
