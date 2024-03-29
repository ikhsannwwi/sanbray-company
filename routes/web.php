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
use App\Http\Controllers\edit\stok_produkController;
use App\Http\Controllers\edit\role_userController;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/ms-admin-ikhsannawawi', function () {
    Artisan::call('migrate:fresh --seed');
    return redirect()->route('index');
});

Route::get('/', [feController::class, 'index'])->name('index');

Route::get('/produk', [feController::class, 'produk'])->name('produk')->middleware('auth');

Route::get('/data/pemasukan-pengeluaran', [feController::class, 'pemasukan_pengeluaran'])->name('pemasukan_pengeluaran')->middleware('auth');

Route::get('/data/stok-produk', [feController::class, 'stok_produk'])->name('stok_produk')->middleware('auth');

Route::get('/data/user-table', [feController::class, 'users'])->name('user')->middleware('auth');

Route::get('/data/role-user', [feController::class, 'role_user'])->name('role_user')->middleware('auth');

Route::get('/user/add-role-user', [role_userController::class, 'fe_add_role_user'])->name('add_role_user')->middleware('auth');
Route::post('/user/insert-role-user', [role_userController::class, 'fe_insert_role_user'])->middleware('auth');
Route::get('/user/edit-role-user/{id}', [role_userController::class, 'fe_edit_role_user'])->name('edit_role_user')->middleware('auth');
Route::post('/user/update-role-user/{id}', [role_userController::class, 'fe_update_role_user'])->middleware('auth');
Route::get('/user/delete-role-user/{id}', [role_userController::class, 'fe_delete_role_user'])->middleware('auth');

Route::get('/user/add-user', [userController::class, 'fe_add_user'])->name('add_user')->middleware('auth');
Route::post('/user/insert-user', [userController::class, 'fe_insert_user'])->middleware('auth');
Route::get('/user/edit-user/{id}', [userController::class, 'fe_edit_user'])->name('edit_user')->middleware('auth');
Route::post('/user/update-user/{id}', [userController::class, 'fe_update_user'])->middleware('auth');
Route::get('/user/edit-password-user/{id}', [userController::class, 'fe_edit_password_user'])->name('edit_password_user')->middleware('auth');
Route::post('/user/update-password-user/{id}', [userController::class, 'fe_update_password_user'])->name('update_password_user')->middleware('auth');
Route::get('/user/delete-user/{id}', [userController::class, 'fe_delete_user'])->middleware('auth');

Route::get('/produk/add-pendistribusian', [pendistribusianController::class, 'fe_add_pendistribusian'])->name('add_pendistribusian')->middleware('auth');
Route::post('/produk/add-pendistribusian-pending/{id}', [pendistribusianController::class, 'fe_add_pendistribusian_pending'])->name('add_pendistribusian_pending')->middleware('auth');
Route::post('/produk/add-pendistribusian-pending-gudang/{id}', [pendistribusianController::class, 'fe_add_pendistribusian_pending_gudang'])->name('add_pendistribusian_pending_gudang')->middleware('auth');
Route::get('/produk/add-pendistribusian-to-kredit/{id}', [pendistribusianController::class, 'fe_add_pendistribusian_to_kredit'])->name('add_pendistribusian_to_kredit')->middleware('auth');
Route::get('/produk/add-pengurangan-stok-produk/{id}', [pendistribusianController::class, 'fe_add_pengurangan_stok_produk'])->name('add_pengurangan_stok_produk')->middleware('auth');
Route::post('/produk/insert-pendistribusian', [pendistribusianController::class, 'fe_insert_pendistribusian'])->middleware('auth');
Route::get('/produk/edit-pendistribusian/{id}', [pendistribusianController::class, 'fe_edit_pendistribusian'])->name('edit_pendistribusian')->middleware('auth');
Route::post('/produk/update-pendistribusian/{id}', [pendistribusianController::class, 'fe_update_pendistribusian'])->middleware('auth');
Route::get('/produk/delete-pendistribusian/{id}', [pendistribusianController::class, 'fe_delete_pendistribusian'])->middleware('auth');



Route::get('/produk/add-pemasukan-pengeluaran', [pemasukan_pengeluaranController::class, 'fe_add_pemasukan_pengeluaran'])->name('add_pemasukan_pengeluaran')->middleware('auth');
Route::post('/produk/insert-pemasukan-pengeluaran', [pemasukan_pengeluaranController::class, 'fe_insert_pemasukan_pengeluaran'])->middleware('auth');
Route::get('/produk/edit-pemasukan-pengeluaran/{id}', [pemasukan_pengeluaranController::class, 'fe_edit_pemasukan_pengeluaran'])->name('edit_pemasukan_pengeluaran')->middleware('auth');
Route::post('/produk/update-pemasukan-pengeluaran/{id}', [pemasukan_pengeluaranController::class, 'fe_update_pemasukan_pengeluaran'])->middleware('auth');
Route::get('/produk/delete-pemasukan-pengeluaran/{id}', [pemasukan_pengeluaranController::class, 'fe_delete_pemasukan_pengeluaran'])->middleware('auth');


Route::get('/produk/add-stok-produk', [stok_produkController::class, 'fe_add_stok_produk'])->name('add_stok_produk')->middleware('auth');
Route::post('/produk/insert-stok-produk', [stok_produkController::class, 'fe_insert_stok_produk'])->middleware('auth');
Route::get('/produk/edit-stok-produk/{id}', [stok_produkController::class, 'fe_edit_stok_produk'])->name('edit_stok_produk')->middleware('auth');
Route::post('/produk/update-stok-produk/{id}', [stok_produkController::class, 'fe_update_stok_produk'])->middleware('auth');
Route::get('/produk/delete-stok-produk/{id}', [stok_produkController::class, 'fe_delete_stok_produk'])->middleware('auth');


Route::get('/produk/add-nama-produk', [nama_produkController::class, 'fe_add_nama_produk'])->name('add_nama_produk')->middleware('auth');
Route::post('/produk/insert-nama-produk', [nama_produkController::class, 'fe_insert_nama_produk'])->middleware('auth');
Route::get('/produk/edit-nama-produk/{id}', [nama_produkController::class, 'fe_edit_nama_produk'])->name('edit_nama_produk')->middleware('auth');
Route::post('/produk/update-nama-produk/{id}', [nama_produkController::class, 'fe_update_nama_produk'])->middleware('auth');
Route::get('/produk/delete-nama-produk/{id}', [nama_produkController::class, 'fe_delete_nama_produk'])->middleware('auth');


Route::get('/data/user-profile', [feController::class, 'user_profile'])->name('user_profile')->middleware('auth');
Route::get('/faq', [feController::class, 'faq'])->name('faq');
Route::get('/contact', [feController::class, 'contact'])->name('contact');




Route::get('/data/jenis-produk', [feController::class, 'jenis_produk'])->name('jenis_produk')->middleware('auth');
Route::get('/data/jenis-produk/{slug}', [jenis_produkController::class, 'fe_sub_jenis_produk'])->name('sub_jenis_produk')->middleware('auth');
Route::get('/produk/add-jenis-produk', [jenis_produkController::class, 'fe_add_jenis_produk'])->name('add_jenis_produk')->middleware('auth');
Route::post('/produk/insert-jenis-produk', [jenis_produkController::class, 'fe_insert_jenis_produk'])->middleware('auth');
Route::get('/produk/edit-jenis-produk/{id}', [jenis_produkController::class, 'fe_edit_jenis_produk'])->name('edit_jenis_produk')->middleware('auth');
Route::post('/produk/update-jenis-produk/{id}', [jenis_produkController::class, 'fe_update_jenis_produk'])->middleware('auth');
Route::get('/produk/delete-jenis-produk/{id}', [jenis_produkController::class, 'fe_delete_jenis_produk'])->middleware('auth');





Route::get('/data/harga-jual', [feController::class, 'harga_jual'])->name('harga_jual')->middleware('auth');
Route::get('/produk/add-harga-jual', [harga_jualController::class, 'fe_add_harga_jual'])->name('add_harga_jual')->middleware('auth');
Route::get('/produk/edit-harga-jual/{id}', [harga_jualController::class, 'fe_edit_harga_jual'])->name('edit_harga_jual')->middleware('auth');
Route::post('/produk/insert-harga-jual', [harga_jualController::class, 'fe_insert_harga_jual'])->middleware('auth');
Route::post('/produk/update-harga-jual/{id}', [harga_jualController::class, 'fe_update_harga_jual'])->middleware('auth');
Route::get('/produk/delete-harga-jual/{id}', [harga_jualController::class, 'fe_delete_harga_jual'])->middleware('auth');



Route::get('/data/tempat-distribusi', [feController::class, 'tempat_distribusi'])->name('tempat_distribusi')->middleware('auth');
Route::get('/produk/add-tempat-distribusi', [tempat_distribusiController::class, 'fe_add_tempat_distribusi'])->name('add_tempat_distribusi')->middleware('auth');
Route::get('/produk/edit-tempat-distribusi/{id}', [tempat_distribusiController::class, 'fe_edit_tempat_distribusi'])->name('edit_tempat_distribusi')->middleware('auth');
Route::post('/produk/insert-tempat-distribusi', [tempat_distribusiController::class, 'fe_insert_tempat_distribusi'])->middleware('auth');
Route::post('/produk/update-tempat-distribusi/{id}', [tempat_distribusiController::class, 'fe_update_tempat_distribusi'])->middleware('auth');
Route::get('/produk/delete-tempat-distribusi/{id}', [tempat_distribusiController::class, 'fe_delete_tempat_distribusi'])->middleware('auth');


Route::get('/login', [authController::class, 'login'])->name('login');
Route::post('/loginproses', [authController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [authController::class, 'logout'])->name('logout');