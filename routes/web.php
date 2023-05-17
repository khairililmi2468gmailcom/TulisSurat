<?php

use App\Http\Controllers\DrhController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\PengunduranController;

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
    return view('welcome');
});

Route::get('/suratLamaran', function () {
    return view('suratLamaran');
});
Route::post('/proses-lamaran-docx', [SuratController::class, 'generateSurat']);

Route::get('/SLM', function () {
    return view('SLM');
});


Route::post('/proses-lamaran', [LamaranController::class, 'store']);

Route::get('/SPD', function () {
    return view('SPD');
});
Route::post('/proses-pengunduran', [PengunduranController::class, 'store']);

Route::get('/DRH', function () {
    return view('DRH');
});
Route::post('proses-drh', [DrhController::class, 'store']);


Route::get('/SIO', function () {
    return view('SIO');
});
Route::post('proses-izinOrtu', [SuratController::class, 'storeIzinOrtu']);

Route::get('/STMK', function () {
    return view('STMK');
});
Route::post('proses-tidakMasukKerja', [SuratController::class, 'storeTidakMasukKerja']);
Route::get('/SKUASA', function () {
    return view('SKUASA');
});
Route::post('proses-kuasa', [SuratController::class, 'storeKuasa']);

Route::get('/SBR', function () {
    return view('SBR');
});
Route::post('proses-Blokir', [SuratController::class, 'storeBlokirRekening']);

Route::get('/SPO', function () {
    return view('SPO');
});
Route::post('proses-penghasilanOrtu', [SuratController::class, 'storePenghasilanOrtu']);
// Route::post('/generate-surat', 'SuratController@generateSurat')->name('generate-surat');