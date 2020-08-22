<?php

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

// Page Guest
Route::get('/home', 'GuestController@index');
Route::get('/salam', 'GuestController@salam');
Route::get('/daftarbuku', 'GuestController@daftarbuku');
Route::get('/pinjambuku', 'GuestController@pinjambuku');
Route::get('/loginuser', 'GuestController@loginuser');
Route::get('/regisuser', 'GuestController@regisuser');
Route::get('/bukuonline', 'GuestController@bukuonline');
Route::get('/myprofile', 'GuestController@myprofile');
Route::get('/about', 'GuestController@about');
Route::get('/showbukuguest', 'GuestController@showbukuguest');
Route::get('/', function(){
    return view('guest.welcome');
});

// Page Admin

Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/regis', 'AdminController@regis');
Route::get('/showbuku', 'BukuController@showbuku');


// profile
Route::get('/profile', 'AdminController@profile');


// buku
Route::resource('buku', 'BukuController');

// kategori
Route::resource('kategori','KategoriController');

// ruangan
Route::resource('ruangan', 'RuanganController');

// laporan
Route::get('/laporan', 'AdminController@laporan');

// petugas
Route::resource('admin', 'AdminController');


// transaksi
Route::get('/transaksi', 'AdminController@transaksi');
Route::get('/edittransaksi', 'AdminController@edittransaksi');
Route::get('/createtransaksi', 'AdminController@createtransaksi');













