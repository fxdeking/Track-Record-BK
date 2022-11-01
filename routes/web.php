<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatatanController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::group(['prefix'=>'catatan'], function(){
    Route::get('/index', 'CatatanController@index')->name('cat')->middleware('auth');
    Route::get('/input', 'CatatanController@input')->name('catinput')->middleware('auth');
    Route::post('/tambah', 'CatatanController@tambah')->name('cattambah')->middleware('auth');
    Route::get('/edit/{id}', 'CatatanController@edit')->name('catedit')->middleware('auth');
    Route::post('/update/{id}', 'CatatanController@update')->name('catupdate')->middleware('auth');
    Route::delete('/delete/{id}', 'CatatanController@delete')->name('catdelete')->middleware('auth');
});
