<?php

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

// Route::get('/', function () {return redirect('/data_kriteria');});
Route::get('/', function () {return redirect('/login')->with('Berhasil', 'Selamat Datang.');});

//untuk menampilkan
Route::get('admin','AdminController@data_karyawan');
Route::get('admin/data_karyawan','AdminController@data_karyawan');
Route::get('admin/data_pengajuan','AdminController@data_pengajuan');

//untuk menambah data
Route::post('admin/data_karyawan','AdminController@tambah_data_karyawan');
Route::post('admin/data_pengajuan','AdminController@tambah_data_pengajuan');
Route::post('admin/data_status_karyawan','AdminController@tambah_data_status_karyawan');
Route::post('admin/data_jabatan','AdminController@tambah_data_jabatan');

//untuk mengupdate data
Route::put('admin/data_karyawan/{id}','AdminController@update_data_karyawan');
Route::put('admin/data_pengajuan/{id}','AdminController@update_data_pengajuan');
Route::put('admin/data_status_karyawan/{id}','AdminController@update_data_status_karyawan');
Route::put('admin/data_jabatan/{id}','AdminController@update_data_jabatan');

//untuk menghapus data
Route::delete('admin/data_karyawan/{id}','AdminController@delete_data_karyawan');
Route::delete('admin/data_pengajuan/{id}','AdminController@delete_data_pengajuan');
Route::delete('admin/data_status_karyawan/{id}','AdminController@delete_data_status_karyawan');
Route::delete('admin/data_jabatan/{id}','AdminController@delete_data_jabatan');







Route::Resource('hrd','HRDController');
Route::Resource('karyawan','KaryawanController');

Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/login','LoginKaryawanController@showLoginForm');
Route::post('/login','LoginKaryawanController@LoginKaryawan')->name('login');
