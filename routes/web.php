<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\CampurController;
use App\Http\Controllers\ProfilController;

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
    return view('frontend.index');
});

Route::get('/tentang', function () {
    return view('frontend.about');
})->name('tentang');

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::group(['prefix'=>'catatan'], function(){
    Route::get('/', 'CatatanController@index')->name('cat')->middleware('auth');
    Route::get('/input', 'CatatanController@input')->name('catinput')->middleware('auth');
    Route::post('/tambah', 'CatatanController@tambah')->name('cattambah')->middleware('auth');
    Route::get('/edit/{id}', 'CatatanController@edit')->name('catedit')->middleware('auth');
    Route::post('/update/{id}', 'CatatanController@update')->name('catupdate')->middleware('auth');
    Route::delete('/delete/{id}', 'CatatanController@delete')->name('catdelete')->middleware('auth');
});

Route::get('/aboutus', 'CampurController@aboutus')->name('aboutus')->middleware('auth');

Route::group(['prefix'=>'profil'], function(){
    Route::get('/', 'ProfilController@profil')->name('profil')->middleware('auth');
    Route::post('/updatenama/{id}', 'ProfilController@updatenama')->name('profilupdatenama')->middleware('auth');
    Route::post('/updateemail/{id}', 'ProfilController@updateemail')->name('profilupdateemail')->middleware('auth');
    Route::post('/updatetelepon/{id}', 'ProfilController@updatetelepon')->name('profilupdatetelepon')->middleware('auth');
    Route::post('/updatefoto/{id}', 'ProfilController@updatefoto')->name('profilupdatefoto')->middleware('auth');
    Route::post('/updatepassword', 'ProfilController@updatepassword')->name('profilupdatepassword')->middleware('auth');
});

Route::group(['prefix'=>'admins'], function(){
    Route::get('/', 'AdminController@index')->name('adm')->middleware('auth');
    Route::delete('/delete/{id}', 'AdminController@delete')->name('admdelete')->middleware('auth');
});

Route::group(['prefix'=>'kategori'], function(){
    Route::get('/', 'KategoriController@index')->name('kat')->middleware('auth');
    Route::get('/input', 'KategoriController@input')->name('katinput')->middleware('auth');
    Route::post('/tambah', 'KategoriController@tambah')->name('kattambah')->middleware('auth');
    Route::get('/edit/{id}', 'KategoriController@edit')->name('katedit')->middleware('auth');
    Route::post('/update/{id}', 'KategoriController@update')->name('katupdate')->middleware('auth');
    Route::delete('/delete/{id}', 'KategoriController@delete')->name('katdelete')->middleware('auth');
});

Route::group(['prefix'=>'pengunjung'], function(){
    Route::get('/', 'PengunjungController@index')->name('peng')->middleware('auth');
    Route::get('/input', 'PengunjungController@input')->name('penginput')->middleware('auth');
    Route::post('/tambah', 'PengunjungController@tambah')->name('pengtambah')->middleware('auth');
    Route::get('/edit/{id}', 'PengunjungController@edit')->name('pengedit')->middleware('auth');
    Route::post('/update/{id}', 'PengunjungController@update')->name('pengupdate')->middleware('auth');
    Route::delete('/delete/{id}', 'PengunjungController@delete')->name('pengdelete')->middleware('auth');
});

Route::group(['prefix'=>'konselor'], function(){
    Route::get('/', 'KonselorController@index')->name('kon')->middleware('auth');
    Route::get('/input', 'KonselorController@input')->name('koninput')->middleware('auth');
    Route::post('/tambah', 'KonselorController@tambah')->name('kontambah')->middleware('auth');
    Route::get('/edit/{id}', 'KonselorController@edit')->name('konedit')->middleware('auth');
    Route::post('/update/{id}', 'KonselorController@update')->name('konupdate')->middleware('auth');
    Route::delete('/delete/{id}', 'KonselorController@delete')->name('kondelete')->middleware('auth');
});

Route::group(['prefix'=>'laporan'], function(){
    Route::get('/', 'LaporanController@index')->name('lap')->middleware('auth');
    Route::get('/input/{id}', 'LaporanController@input')->name('lapinput')->middleware('auth');
    Route::post('/tambah', 'LaporanController@tambah')->name('laptambah')->middleware('auth');
    Route::get('/edit/{id}', 'LaporanController@edit')->name('lapedit')->middleware('auth');
    Route::post('/update/{id}', 'LaporanController@update')->name('lapupdate')->middleware('auth');
    Route::delete('/delete/{id}', 'LaporanController@delete')->name('lapdelete')->middleware('auth');
});

Route::group(['prefix'=>'jadwal'], function(){
    Route::get('/', 'JadwalController@index')->name('jad')->middleware('auth');
    Route::get('/input', 'JadwalController@input')->name('jadinput')->middleware('auth');
    Route::post('/tambah', 'JadwalController@tambah')->name('jadtambah')->middleware('auth');
    Route::get('/edit/{id}', 'JadwalController@edit')->name('jadedit')->middleware('auth');
    Route::post('/update/{id}', 'JadwalController@update')->name('jadupdate')->middleware('auth');
    Route::delete('/delete/{id}', 'JadwalController@delete')->name('jaddelete')->middleware('auth');
});
