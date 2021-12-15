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


Route::get('/daftarakun', 'GuestController@daftarakun')->name('daftarakun');
Route::get('/forgotpass', 'GuestController@forgotpass')->name('forgotpass');
Route::get('/loginakun', 'GuestController@loginakun')->name('loginakun');
Route::get('/searchbook', 'GuestController@searchbook')->name('searchbook');
Route::get('/searchingpage', 'GuestController@searchingpage')->name('searchingpage');
Route::get('/daftarbuku', 'GuestController@daftarbuku')->name('daftarbuku');
Route::get('/detail', 'GuestController@detail')->name('detail');
Route::get('/about', 'GuestController@about')->name('about');
Route::get('/', 'GuestController@index')->name('landingpage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/detail-pinjam', 'HomeController@detailpinjam')->name('detailpinjam');
Route::get('/update-akun', 'HomeController@updateakun')->name('update-akun');
Route::get('/daftar-anggota', 'HomeController@daftaranggota')->name('daftar-anggota');
Route::get('/detail-kembali', 'HomeController@detailkembali')->name('detail-kembali');
Route::get('/pinjam-page', 'HomeController@pinjampage')->name('pinjampage');
Route::get('/pengembalian-sukses', 'HomeController@pengembaliansukses')->name('pengembalian-sukses');
Route::get('/pengembalian', 'HomeController@pengembalian')->name('pengembalian');
Route::get('/pinjamsukses', 'HomeController@pinjamsukses')->name('pinjamsukses');
Route::get('/aboutlogin', 'HomeController@aboutlogin')->name('aboutlogin');
Route::get('/lpdataanggota', 'HomeController@laporandataanggota')->name('laporandataanggota');
Route::get('/lpdendaanggota', 'HomeController@laporandendaanggota')->name('laporandendaanggota');
Route::get('/lpdonasibuku', 'HomeController@laporandonasibuku')->name('laporandonasibuku');
Route::get('/lppeminjaman', 'HomeController@laporanpeminjaman')->name('laporanpeminjaman');
Route::get('/lppengembalian', 'HomeController@laporanpengembalian')->name('laporanpengembalian');
Route::get('/kartu-anggota', 'HomeController@kartuanggota')->name('kartuanggota');
