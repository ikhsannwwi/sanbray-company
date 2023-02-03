<?php

use Illuminate\Support\Facades\Route;

use Spatie\Activitylog\Models\Activity;

use App\Models\jenis__produk;

use App\Http\Controllers\feController;
use App\Http\Controllers\edit\nama_produkController;
use App\Http\Controllers\edit\jenis_produkController;
use App\Http\Controllers\edit\pendistribusianController;
use App\Http\Controllers\edit\pemasukan_pengeluaranController;
use App\Http\Controllers\edit\tempat_distribusiController;
use App\Http\Controllers\edit\harga_jualController;

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

Route::get('/log', function () {
    return Activity::all()->last();
    return view('welcome');
});

Route::get('/', [feController::class, 'index'])->name('index');

Route::get('/produk', [feController::class, 'produk'])->name('produk');

Route::get('/data/pemasukan-pengeluaran', [feController::class, 'pemasukan_pengeluaran'])->name('pemasukan_pengeluaran');



Route::get('/produk/add-pendistribusian', [pendistribusianController::class, 'fe_add_pendistribusian'])->name('add_pendistribusian');
Route::post('/produk/add-pendistribusian-pending/{id}', [pendistribusianController::class, 'fe_add_pendistribusian_pending'])->name('add_pendistribusian_pending');
Route::get('/produk/add-pendistribusian-to-kredit/{id}', [pendistribusianController::class, 'fe_add_pendistribusian_to_kredit'])->name('add_pendistribusian_to_kredit');
Route::post('/produk/insert-pendistribusian', [pendistribusianController::class, 'fe_insert_pendistribusian']);
Route::get('/produk/edit-pendistribusian/{id}', [pendistribusianController::class, 'fe_edit_pendistribusian'])->name('edit_pendistribusian');
Route::post('/produk/update-pendistribusian/{id}', [pendistribusianController::class, 'fe_update_pendistribusian']);
Route::get('/produk/delete-pendistribusian/{id}', [pendistribusianController::class, 'fe_delete_pendistribusian']);



Route::get('/produk/add-pemasukan-pengeluaran', [pemasukan_pengeluaranController::class, 'fe_add_pemasukan_pengeluaran'])->name('add_pemasukan_pengeluaran');
Route::post('/produk/insert-pemasukan-pengeluaran', [pemasukan_pengeluaranController::class, 'fe_insert_pemasukan_pengeluaran']);
Route::get('/produk/edit-pemasukan-pengeluaran/{id}', [pemasukan_pengeluaranController::class, 'fe_edit_pemasukan_pengeluaran'])->name('edit_pemasukan_pengeluaran');
Route::post('/produk/update-pemasukan-pengeluaran/{id}', [pemasukan_pengeluaranController::class, 'fe_update_pemasukan_pengeluaran']);
Route::get('/produk/delete-pemasukan-pengeluaran/{id}', [pemasukan_pengeluaranController::class, 'fe_delete_pemasukan_pengeluaran']);



Route::get('/produk/add-nama-produk', [nama_produkController::class, 'fe_add_nama_produk'])->name('add_nama_produk');
Route::post('/produk/insert-nama-produk', [nama_produkController::class, 'fe_insert_nama_produk']);
Route::get('/produk/edit-nama-produk/{id}', [nama_produkController::class, 'fe_edit_nama_produk'])->name('edit_nama_produk');
Route::post('/produk/update-nama-produk/{id}', [nama_produkController::class, 'fe_update_nama_produk']);
Route::get('/produk/delete-nama-produk/{id}', [nama_produkController::class, 'fe_delete_nama_produk']);


Route::get('/data/user-profile', [feController::class, 'user_profile'])->name('user_profile');
Route::get('/faq', [feController::class, 'faq'])->name('faq');
Route::get('/contact', [feController::class, 'contact'])->name('contact');




Route::get('/data/jenis-produk', [feController::class, 'jenis_produk'])->name('jenis_produk');
Route::get('/data/jenis-produk/{slug}', [jenis_produkController::class, 'fe_sub_jenis_produk'])->name('sub_jenis_produk');
Route::get('/produk/add-jenis-produk', [jenis_produkController::class, 'fe_add_jenis_produk'])->name('add_jenis_produk');
Route::post('/produk/insert-jenis-produk', [jenis_produkController::class, 'fe_insert_jenis_produk']);
Route::get('/produk/edit-jenis-produk/{id}', [jenis_produkController::class, 'fe_edit_jenis_produk'])->name('edit_jenis_produk');
Route::post('/produk/update-jenis-produk/{id}', [jenis_produkController::class, 'fe_update_jenis_produk']);
Route::get('/produk/delete-jenis-produk/{id}', [jenis_produkController::class, 'fe_delete_jenis_produk']);





Route::get('/data/harga-jual', [feController::class, 'harga_jual'])->name('harga_jual');
Route::get('/produk/add-harga-jual', [harga_jualController::class, 'fe_add_harga_jual'])->name('add_harga_jual');
Route::get('/produk/edit-harga-jual/{id}', [harga_jualController::class, 'fe_edit_harga_jual'])->name('edit_harga_jual');
Route::post('/produk/insert-harga-jual', [harga_jualController::class, 'fe_insert_harga_jual']);
Route::post('/produk/update-harga-jual/{id}', [harga_jualController::class, 'fe_update_harga_jual']);
Route::get('/produk/delete-harga-jual/{id}', [harga_jualController::class, 'fe_delete_harga_jual']);



Route::get('/data/tempat-distribusi', [feController::class, 'tempat_distribusi'])->name('tempat_distribusi');
Route::get('/produk/add-tempat-distribusi', [tempat_distribusiController::class, 'fe_add_tempat_distribusi'])->name('add_tempat_distribusi');
Route::get('/produk/edit-tempat-distribusi/{id}', [tempat_distribusiController::class, 'fe_edit_tempat_distribusi'])->name('edit_tempat_distribusi');
Route::post('/produk/insert-tempat-distribusi', [tempat_distribusiController::class, 'fe_insert_tempat_distribusi']);
Route::post('/produk/update-tempat-distribusi/{id}', [tempat_distribusiController::class, 'fe_update_tempat_distribusi']);
Route::get('/produk/delete-tempat-distribusi/{id}', [tempat_distribusiController::class, 'fe_delete_tempat_distribusi']);


