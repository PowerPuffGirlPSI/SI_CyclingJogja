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



Route::get('/masuk', function () {
    return view('masuk');
});
//Route::get('/login_', function () {
//    return view('auth.loginview');
//});




Auth::routes();
Route::get('/', 'AwalController@index');
Route::get('/sewa', 'SewaController@index');
Route::get('/cuaca', 'CuacaAwalController@index');
Route::get('/cuacawelcome', 'CuacaController@index');
Route::get('/sewasepedawelcome', 'SewaSepedaController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepage', 'EventController@index')->name('user.homepage');
Route::get('/bantuan', 'BantuanController@index');
Route::get('/bantuanbef', 'BantuanbefController@index');
Route::get('/tentang', 'TentangController@index');
Route::get('/tentangbef', 'TentangbefController@index');
Route::get('/kontak', 'TentangController@kontak');

Route::get('/pemesanan/{id}', 'PemesananController@index');
Route::get('/pesan_tiket/{id_event}', 'PemesananController@store');

Route::get('/pemesanansepeda/{id}', 'PemesananSepedaController@index');
Route::get('/pesan_sepeda/{id_sepeda}', 'PemesananSepedaController@store');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/editprofil', 'ProfilController@edit_profil');
    Route::patch('/editprofil', 'ProfilController@update_profil');
});

Route::get('/tiket', 'TiketController@index');


//Admin
Route::get('/admin/login', 'Auth\AdminLoginController@ShowLoginForm')->middleware('guest');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin-login');
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/tabel_pengguna','TabelPenggunaController@index');
Route::get('/admin/hapus_pengguna/{id}','TabelPenggunaController@hapus');

Route::get('/admin/tabel_event','TabelEventController@index');
Route::get('/admin/tambah_event','TabelEventController@create');
Route::post('/admin/store_event','TabelEventController@store');
Route::get('/admin/edit_event/{id}','TabelEventController@edit');
Route::post('/admin/update_event','TabelEventController@update');
Route::get('/admin/hapus_event/{id}','TabelEventController@hapus');

Route::get('/admin/tabel_tiket','TabelTiketController@index');
Route::get('/admin/edit_pendaftar/{id}','TabelTiketController@edit');
Route::post('/admin/update_pendaftar','TabelTiketController@update');
Route::get('/admin/hapus_tiket/{id}','TabelTiketController@hapus');

Route::get('/admin/tabel_penyewa','TabelPenyewaController@index');
Route::get('/admin/edit_penyewa/{id}','TabelPenyewaController@edit');
Route::post('/admin/update_penyewa','TabelPenyewaController@update');
Route::get('/admin/hapus_penyewa/{id}','TabelPenyewaController@hapus');


Route::get('/admin/tabel_sepeda','TabelSepedaController@index');
Route::get('/admin/tambah_sepeda','TabelSepedaController@create');
Route::post('/admin/store_sepeda','TabelSepedaController@store');
Route::get('/admin/edit_sepeda/{id}','TabelSepedaController@edit');
Route::post('/admin/update_sepeda','TabelSepedaController@update');
Route::get('/admin/hapus_sepeda/{id}','TabelSepedaController@hapus');

Route::get('/admin/soal','SoalController@index');
Route::get('/admin/tambah_soal','SoalController@create');
Route::post('/admin/store_soal','SoalController@store');
Route::get('/admin/edit_soal/{id}','SoalController@edit');
Route::post('/admin/update_soal','SoalController@update');
Route::get('/admin/hapus_soal/{id}','SoalController@hapus');

Route::get('/admin/laporan_peserta','LaporanPesertaController@index');
Route::get('/admin/laporan_penyewa','LaporanPenyewaController@index');

