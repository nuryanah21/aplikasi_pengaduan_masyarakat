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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login','Auth\\LoginController@FormLoginMasyarakat');
Route::post('login','Auth\\LoginController@LoginMasyarakat')->name('masyarakat.login');

Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan');
Route::get('/pengaduan/create', 'PengaduanController@create');