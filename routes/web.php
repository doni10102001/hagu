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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// // protect single route with authentication
// Route::get('admin_dash', 'DashboardController@admin')->middleware('admin');

// // protect group routes with authentication
// Route::get('admin_area', ['middleware' => 'admin', function () {

//     Route::get('test', function () {
//         return 'Welcome Admin!';
//     });

// }]);
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('home');

//halaman admin : absensi masuk
Route::prefix('absensi_masuk')->group(function() {
	Route::get('/', 'Admin\AbsensiMasukController@index')->name('absensi_masuk');
	//Datatables
	Route::get('/data', 'Admin\AbsensiMasukController@AbsensiMasukDatatables')->name('absensi_masuk.data');
	//Ubah data
	Route::get('/{id}/ubah', 'Admin\AbsensiMasukController@edit')->name('absensi_masuk.edit');
	Route::post('/{id}', 'Admin\AbsensiMasukController@update')->name('absensi_masuk.post');
	//Hapus
	Route::delete('/{id}/hapus', 'Admin\AbsensiMasukController@destroy')->name('absensi_masuk.delete');
});

//Halaman admin : absensi pulang
Route::prefix('absensi_pulang')->group(function() {
	Route::get('/', 'Admin\AbsensiPulangController@index')->name('absensi_pulang');
});

//Halaman Admin : Laporan Kehadiran
Route::prefix('laporan_kehadiran')->group(function() {
	Route::get('/', 'Admin\LaporanKehadiranController@index')->name('laporan_kehadiran');
});

//Halaman Admin : Profile Admin
Route::prefix('profile_admin')->group(function() {
	Route::get('/', 'Admin\ProfileAdminController@index')->name('profile_admin');
});
