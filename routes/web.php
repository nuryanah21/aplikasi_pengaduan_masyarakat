<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//email verifikasi
Route::get('/email/verify', function (){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();

    return redirect('/login');
})->middleware(['auth','signed'])->name('verification.verify');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/register', 'LoginController@register')->name('register');
Route::post('/simpanregister', 'LoginController@simpanregister')->name('simpanregister');

Route::post('/getkabupaten', 'LoginController@getkabupaten')->name('getkabupaten');
Route::post('/getkecamatan', 'LoginController@getkecamatan')->name('getkecamatan');
Route::post('/getdesa', 'LoginController@getdesa')->name('getdesa');

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {
    // Route::get('/dashboard','DashboardController@index');

    // data petugas
    Route::get('/petugas', 'AdminController@index')->name('petugas');
    Route::get('/petugas/create', 'AdminController@create');
    Route::post('/petugas/store', 'AdminController@store');
    Route::get('/petugas/show/{id}', 'AdminController@show');
    Route::get('/petugas/delete/{id}', 'AdminController@delete');


    // pengaduan
    Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan');
    Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
    Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
    Route::get('/pengaduan/show/{id}', 'PengaduanController@show');
    Route::get('/pengaduan/delete/{id}', 'PengaduanController@delete');
    Route::post('/pengaduan/show/onchange/{id}', 'PengaduanController@statusOnchange')->name('pengaduan.statusOnchange');
    Route::get('/pengaduan/pdf', 'AdminController@pdf')->name('pengaduan.pdf');

    // tanggapan
    Route::get('/tanggapan', 'TanggapanController@index')->name('tanggapan');
    Route::get('/tanggapan/create', 'TanggapanController@create');
    Route::post('/pengaduan/show/{id}', 'TanggapanController@store');
    Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
    Route::put('/tanggapan/update/{id}', 'TanggapanController@update');
    Route::get('/tanggapan/delete/{id}', 'TanggapanController@delete');

    //tampildata masyarakat
    Route::get('/user', 'UserController@indexx')->name('user');
    Route::get('/user/show/{id}', 'UserController@showw');
    Route::get('/user/delete/{id}', 'UserController@delete');

    
});

Route::group(['middleware' => ['auth', 'ceklevel:petugas']], function() {
    // Route::get('/dashboard','DashboardController@index');

    //petugas
    Route::get('/petugas/pengaduan', 'PetugasController@index')->name('pengaduan');
    Route::get('/petugas/pengaduan/show/{id}', 'PetugasController@show');
    Route::get('/petugas/pengaduan/delete/{id}', 'PetugasController@delete');
    Route::post('/petugas/pengaduan/show/onchange/{id}', 'PetugasController@statusOnchange1')->name('pengaduan.statusOnchange1');
    Route::post('/petugas/pengaduan/show/{id}', 'TanggapanController@store');
    Route::get('/petugas/tanggapan', 'PetugasController@indextanggapan')->name('tanggapan');
    Route::get('/petugas/tanggapan/create', 'PetugasController@createtanggapan');
    Route::get('/petugas/tanggapan/delete/{id}', 'PetugasController@deletetanggapan');
    Route::post('/petugas/pengaduan/show/{id}', 'PetugasController@storetanggapan');
    Route::get('/petugas/tanggapan/edit/{id}', 'PetugasController@edittanggapan');
    Route::put('/petugas/pengaduan/update/{id}', 'PetugasController@update');
        

});

Route::group(['middleware' => ['auth', 'ceklevel:masyarakat']], function() {
    // Route::get('/dashboard','DashboardController@index');

    //masyarakat
    Route::get('/masyarakat/masyarakatdetail/{id}','PengaduanController@showMasyarakat');
    Route::get('/masyarakat/create/','PengaduanController@create');
    Route::post('/masyarakat/store/','PengaduanController@store');
    Route::get('/masyarakat/laporanku/','PengaduanController@laporanku');
    Route::get('/masyarakat/laporanku/showlaporanku/{id}','PengaduanController@showlaporanku');

});









