<?php

use App\Http\Controllers\AlokasiDanaController;
use App\Http\Controllers\AsosiasiController;
use App\Http\Controllers\FilterLaporanController;
use App\Http\Controllers\KuliahPakarController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PklController;
use App\Http\Controllers\ReakreditasiController;
use App\Http\Controllers\TugasAkhirController;
use App\Http\Controllers\VallaboratoriumController;
use App\Http\Controllers\ValreakreditasiController;
use App\Http\Controllers\ValtugasakhirController;
use App\Http\Controllers\ValkuliahpakarController;
use App\Http\Controllers\ValasosiasiController;
use App\Http\Controllers\ValpklController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StatusController;


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
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/beranda', function(){
        return view('welcome');
    });
    Route::get('/alokasidana', [AlokasiDanaController::class, 'index']);
    Route::get('/alokasidana/create', [AlokasiDanaController::class, 'create']);
    Route::post('/alokasidana/store', [AlokasiDanaController::class, 'store']);
    Route::get('/alokasidana/{id}/edit', [AlokasiDanaController::class, 'edit']);
    Route::put('/alokasidana/{id}', [AlokasiDanaController::class, 'update']);
    Route::delete('/alokasidana/{id}', [AlokasiDanaController::class, 'destroy']);
});


Route::group(['middleware' => ['auth', 'ceklevel:admin']], function (){
    Route::get('/laporan',[LaporanController::class,'index']);

    Route::get("/filterlaporan",[FilterLaporanController::class,'filterlaporan']);
    Route::get('/cetaklaporan',[FilterLaporanController::class,'laporan.filterlaporan']);

    Route::get('/valreakreditasi', [ValreakreditasiController::class, 'index']);
    Route::get('/valreakreditasi/{id}/setuju', [ValreakreditasiController::class, 'setuju']);
    Route::get('/valreakreditasi/{id}/tolak', [ValreakreditasiController::class, 'tolak']);

    Route::get('/vallaboratorium', [VallaboratoriumController::class, 'index']);
    Route::get('/vallaboratorium/{id}/setuju', [VallaboratoriumController::class, 'setuju']);
    Route::get('/vallaboratorium/{id}/tolak', [VallaboratoriumController::class, 'tolak']);

    Route::get('/valtugasakhir', [ValtugasakhirController::class, 'index']);
    Route::get('/valtugasakhir/{id}/setuju', [ValtugasakhirController::class, 'setuju']);
    Route::get('/valtugasakhir/{id}/tolak', [ValtugasakhirController::class, 'tolak']);

    Route::get('/valkuliahpakar', [ValkuliahpakarController::class, 'index']);
    Route::get('/valkuliahpakar/{id}/setuju', [ValkuliahpakarController::class, 'setuju']);
    Route::get('/valkuliahpakar/{id}/tolak', [ValkuliahpakarController::class, 'tolak']);

    Route::get('/valasosiasi', [ValasosiasiController::class, 'index']);
    Route::get('/valasosiasi/{id}/setuju', [ValasosiasiController::class, 'setuju']);
    Route::get('/valasosiasi/{id}/tolak', [ValasosiasiController::class, 'tolak']);

    Route::get('/valpkl', [ValpklController::class, 'index']);
    Route::get('/valpkl/{id}/setuju', [ValpklController::class, 'setuju']);
    Route::get('/valpkl/{id}/tolak', [ValpklController::class, 'tolak']);
});


Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {

    Route::get('/danauser', [AlokasiDanaController::class, 'view']);

    Route::get('/statusasosiasi', [ValasosiasiController::class, 'view']);

    Route::get('/statustugasakhir', [ValtugasakhirController::class, 'view']);

    Route::get('/statuspkl', [ValpklController::class, 'view']);

    Route::get('/statuskuliahpakar', [ValkuliahpakarController::class, 'view']);

    Route::get('/statusreakreditasi', [ValreakreditasiController::class, 'view']);

    Route::get('/statuslaboratorium', [VallaboratoriumController::class, 'view']);

    Route::get('/laboratorium', [LaboratoriumController::class, 'index']);
    Route::get('/laboratorium/create', [LaboratoriumController::class, 'create']);
    Route::post('/laboratorium/store', [LaboratoriumController::class, 'store']);
    Route::get('/laboratorium/{id}/edit', [LaboratoriumController::class, 'edit']);
    Route::put('/laboratorium/{id}', [LaboratoriumController::class, 'update']);
    Route::delete('/laboratorium/{id}', [LaboratoriumController::class, 'destroy']);

    Route::get('/reakreditasi', [ReakreditasiController::class, 'index']);
    Route::get('/reakreditasi/create', [ReakreditasiController::class, 'create']);
    Route::post('/reakreditasi/store', [ReakreditasiController::class, 'store']);
    Route::get('/reakreditasi/{id}/edit', [ReakreditasiController::class, 'edit']);
    Route::put('/reakreditasi/{id}', [ReakreditasiController::class, 'update']);
    Route::delete('/reakreditasi/{id}', [ReakreditasiController::class, 'destroy']);

    Route::get('/asosiasi', [AsosiasiController::class, 'index']);
    Route::get('/asosiasi/create', [AsosiasiController::class, 'create']);
    Route::post('/asosiasi/store', [AsosiasiController::class, 'store']);
    Route::get('/asosiasi/{id}/edit', [AsosiasiController::class, 'edit']);
    Route::put('/asosiasi/{id}', [AsosiasiController::class, 'update']);
    Route::delete('/asosiasi/{id}', [AsosiasiController::class, 'destroy']);

    Route::get('/kuliahpakar', [KuliahPakarController::class, 'index']);
    Route::get('/kuliahpakar/create', [KuliahPakarController::class, 'create']);
    Route::post('/kuliahpakar/store', [KuliahPakarController::class, 'store']);
    Route::get('/kuliahpakar/{id}/edit', [KuliahPakarController::class, 'edit']);
    Route::put('/kuliahpakar/{id}', [KuliahPakarController::class, 'update']);
    Route::delete('/kuliahpakar/{id}', [KuliahPakarController::class, 'destroy']);

    Route::get('/tugasakhir', [TugasAkhirController::class, 'index']);
    Route::get('/tugasakhir/create', [TugasAkhirController::class, 'create']);
    Route::post('/tugasakhir/store', [TugasAkhirController::class, 'store']);
    Route::get('/tugasakhir/{id}/edit', [TugasAkhirController::class, 'edit']);
    Route::put('/tugasakhir/{id}', [TugasAkhirController::class, 'update']);
    Route::delete('/tugasakhir/{id}', [TugasAkhirController::class, 'destroy']);

    Route::get('/pkl', [PklController::class, 'index']);
    Route::get('/pkl/create', [PklController::class, 'create']);
    Route::post('/pkl/store', [PklController::class, 'store']);
    Route::get('/pkl/{id}/edit', [PklController::class, 'edit']);
    Route::put('/pkl/{id}', [PklController::class, 'update']);
    Route::delete('/pkl/{id}', [PklController::class, 'destroy']);
});

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');


Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/legout', [LoginController::class,'logout'])->name('logout');