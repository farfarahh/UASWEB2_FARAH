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

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('makul', 'MakulController@index')->name('matakuliah');
Route::get('makul-create', 'MakulController@create')->name('tambah_makul');
Route::post('simpan-makul', 'MakulController@store')->name('simpan.makul');

Route::get('edit.makul/{id}', 'MakulController@edit')->name('makul.edit');
Route::post('update-makul/{id}', 'MakulController@update')->name('update.makul'); 
Route::get('hapus.makul/{id}', 'MakulController@destroy')->name('hapus.edit');

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('mahasiswa-create', 'MahasiswaController@create')->name('tambah_mahasiswa');
Route::post('simpan-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit.mahasiswa/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus.mahasiswa/{id}', 'MahasiswaController@destroy')->name('hapus.mahasiswa');

Route::get('nilai', 'NilaiController@index')->name('nilai'); 
Route::get('nilai-tambah', 'NilaiController@create')->name('tambah_nilai');
Route::post('simpan-nilai', 'NilaiController@store')->name('simpan.nilai');
Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('update-nilai/{id}', 'NilaiController@update')->name('update.nilai');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('hapus.nilai');