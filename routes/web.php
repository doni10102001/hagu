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
Route::any('captcha-test', function() {
        if (request()->getMethod() == 'POST') {
            $rules = ['captcha' => 'required|captcha'];
            $validator = validator()->make(request()->all(), $rules);
            if ($validator->fails()) {
                echo '<p style="color: #ff0000;">Incorrect!</p>';
            } else {
                echo '<p style="color: #00ff30;">Matched :)</p>';
            }
        }
    
        $form = '<form method="post" action="captcha-test">';
        $form .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        $form .= '<p>' . captcha_img() . '</p>';
        $form .= '<p><input type="text" name="captcha"></p>';
        $form .= '<p><button type="submit" name="check">Check</button></p>';
        $form .= '</form>';
        return $form;
    });
Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('home');

//halaman admin : absensi masuk
Route::prefix('absensi_masuk')->group(function() {
	Route::get('/', 'Admin\AbsensiMasukController@index')->name('absensi_masuk');
	//Datatables
	Route::get('/data', 'Admin\AbsensiMasukController@AbsensiMasukDatatables')->name('absensi_masuk.data');
	//Tambah Data
	Route::get('/tambah', 'Admin\AbsensiMasukController@create')->name('absensi_masuk.tambah');
	Route::post('/create', 'Admin\AbsensiMasukController@store')->name('absensi_masuk.create');
	//Lihat Data
	Route::get('/{id}/lihat', 'Admin\AbsensiMasukController@show')->name('absensi_masuk.lihat');
	//Ubah data
	Route::get('/{id}/ubah', 'Admin\AbsensiMasukController@edit')->name('absensi_masuk.edit');
	Route::post('/{id}', 'Admin\AbsensiMasukController@update')->name('absensi_masuk.post');
	//Hapus
	Route::delete('/{id}/hapus', 'Admin\AbsensiMasukController@destroy')->name('absensi_masuk.delete');
});

//Halaman admin : absensi pulang
Route::prefix('absensi_pulang')->group(function() {
	Route::get('/', 'Admin\AbsensiPulangController@index')->name('absensi_pulang');
	//Datatables
	Route::get('/data', 'Admin\AbsensiPulangController@AbsensiPulangDatatables')->name('absensi_pulang.data');
	//Tambah'
	Route::get('/tambah', 'Admin\AbsensiPulangController@create')->name('absensi_pulang.tambah');
	Route::post('/create', 'Admin\AbsensiPulangController@store')->name('absensi_pulang.create');
	//Lihat Data
	Route::get('/{id}/lihat', 'Admin\AbsensiPulangController@show')->name('absensi_pulang.lihat');
	//Ubah Data
	Route::get('/{id}/ubah', 'Admin\AbsensiPulangController@edit')->name('absensi_pulang.edit');
	Route::post('/{id}', 'Admin\AbsensiPulangController@update')->name('absensi_pulang.post');
	//Hapus
	Route::delete('/{id}/hapus', 'Admin\AbsensiPulangController@destroy')->name('absensi_pulang.delete');
});

//Halaman Admin : Laporan Kehadiran
Route::prefix('laporan_kehadiran')->group(function() {
	Route::get('/', 'Admin\LaporanKehadiranController@index')->name('laporan_kehadiran');
	//Datatables
	Route::get('/data', 'Admin\LaporanKehadiranController@LaporanKehadiranDatatables')->name('laporan_kehadiran.data');
	//Data Laporan Kehadiran
	Route::get('/data_lap', 'Admin\LaporanKehadiranController@show')->name('laporan_kehadiran.lihat');
});

//Halaman Admin : QR Scan Masuk
Route::prefix('qr_masuk')->group(function() {
	Route::get('/', 'Admin\QrCodeMasukController@index')->name('qr');
	//Datatables
	Route::get('/data', 'Admin\QrCodeMasukController@QrCodeDatatables')->name('qr.data');
	//Tambah
	Route::get('/tambah', 'Admin\QrCodeMasukController@create')->name('qr.tambah');
	Route::post('/proses', 'Admin\QrCodeMasukController@store')->name('qr.save');
	//lihat
	Route::get('/{id}/lihat', 'Admin\QrCodeMasukController@show')->name('qr.lihat');
	//ubah
	Route::get('/{id}/ubah', 'Admin\QrCodeMasukController@edit')->name('qr.ubah');
	Route::post('/{id}', 'Admin\QrCodeMasukController@update')->name('qr.post');
	//Hapus
	Route::delete('/{id}/hapus', 'Admin\QrCodeMasukController@destroy')->name('qr.hapus');
});

//Halaman Admin : QR Scan Pulang
Route::prefix('qr_pulang')->group(function() {
	Route::get('/', 'Admin\QrCodePulangController@index')->name('qr_out');
	//Datatables
	Route::get('/data', 'Admin\QrCodePulangController@QrCodeOutDatatables')->name('qr_out.data');
	//Tambah
	Route::get('/tambah', 'Admin\QrCodePulangController@create')->name('qr_out.tambah');
	Route::post('/proses', 'Admin\QrCodePulangController@store')->name('qr_out.save');
	//lihat
	Route::get('/{id}/lihat', 'Admin\QrCodePulangController@show')->name('qr_out.lihat');
	//ubah
	Route::get('/{id}/ubah', 'Admin\QrCodePulangController@edit')->name('qr_out.ubah');
	Route::post('/{id}', 'Admin\QrCodePulangController@update')->name('qr_out.post');
	//Hapus
	Route::delete('/{id}/hapus', 'Admin\QrCodePulangController@destroy')->name('qr_out.hapus');
});

//Halaman Admin : guru
Route::prefix('guru')->group(function() {
	Route::get('/', 'Admin\UserController@index')->name('guru');
	//DataTable
	Route::get('/data', 'Admin\UserController@GuruDataTables')->name('guru.data');
	//Tambah
	Route::get('/tambah', 'Admin\UserController@create')->name('guru.tambah');
	Route::post('/create', 'Admin\UserController@store')->name('guru.save');
	//lihat
	Route::get('/{id}/lihat', 'admin\UserController@show')->name('guru.lihat');
	//Ubah
	Route::get('/{id}/ubah', 'Admin\UserController@edit')->name('guru.ubah');
	Route::post('/{id}', 'Admin\UserController@update')->name('guru.post');
	//Hapus
	Route::delete('/{id}/hapus', 'Admin\UserController@destroy')->name('guru.hapus');
});

//Halaman Admin : Keterangan Kehadiran
Route::prefix('ketKeh')->group(function() {
	Route::get('/', 'Admin\KetKehadiranController@index')->name('ketKeh');
	//Datatables
	Route::get('/data', 'Admin\KetKehadiranController@KetKehadiranDatatables')->name('ketKeh.data');
	//tambah
	Route::get('/tambah', 'Admin\KetKehadiranController@create')->name('ketKeh.tambah');
	Route::post('/create', 'Admin\KetKehadiranController@store')->name('ketKeh.save');
});
