<?php

Route::post('/login', 'LoginController@login');
Route::get('/', 'LoginController@checkAuth');
Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => ['auth', 'role:siswa']], function () {
    Route::get('/siswa/beranda', 'SiswaController@beranda');
    Route::post('/siswa/raport', 'SiswaController@cetakraport');
});

Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/beranda', 'SuperadminController@beranda');
    Route::get('/vendor', 'VendorController@vendor');
    Route::get('/vendor/create', 'VendorController@vendorcreate');
    Route::post('/vendor/create', 'VendorController@vendorstore');
    Route::get('/vendor/edit/{id}', 'VendorController@vendoredit');
    Route::post('/vendor/edit/{id}', 'VendorController@vendorupdate');
    Route::get('/vendor/delete/{id}', 'VendorController@vendordelete');


    Route::get('/jabatan', 'JabatanController@jabatan');
    Route::get('/jabatan/create', 'JabatanController@jabatancreate');
    Route::post('/jabatan/create', 'JabatanController@jabatanstore');
    Route::get('/jabatan/edit/{id}', 'JabatanController@jabatanedit');
    Route::post('/jabatan/edit/{id}', 'JabatanController@jabatanupdate');
    Route::get('/jabatan/delete/{id}', 'JabatanController@jabatandelete');

    Route::get('/cuti', 'CutiController@cuti');
    Route::get('/cuti/create', 'CutiController@cuticreate');
    Route::post('/cuti/create', 'CutiController@cutistore');
    Route::get('/cuti/edit/{id}', 'CutiController@cutiedit');
    Route::post('/cuti/edit/{id}', 'CutiController@cutiupdate');
    Route::get('/cuti/delete/{id}', 'CutiController@cutidelete');
    Route::get('/cuti/print/{id}', 'CutiController@suratcuti');

    Route::get('/lembur', 'LemburController@lembur');
    Route::get('/lembur/create', 'LemburController@lemburcreate');
    Route::post('/lembur/create', 'LemburController@lemburstore');
    Route::get('/lembur/edit/{id}', 'LemburController@lemburedit');
    Route::post('/lembur/edit/{id}', 'LemburController@lemburupdate');
    Route::get('/lembur/delete/{id}', 'LemburController@lemburdelete');

    Route::get('/periode', 'PeriodeController@periode');
    Route::get('/periode/create', 'PeriodeController@periodecreate');
    Route::post('/periode/create', 'PeriodeController@periodestore');
    Route::get('/periode/edit/{id}', 'PeriodeController@periodeedit');
    Route::post('/periode/edit/{id}', 'PeriodeController@periodeupdate');
    Route::get('/periode/delete/{id}', 'PeriodeController@periodedelete');

    Route::get('/karyawan', 'KaryawanController@karyawan');
    Route::get('/karyawan/create', 'KaryawanController@karyawancreate');
    Route::post('/karyawan/create', 'KaryawanController@karyawanstore');
    Route::get('/karyawan/edit/{id}', 'KaryawanController@karyawanedit');
    Route::post('/karyawan/edit/{id}', 'KaryawanController@karyawanupdate');
    Route::get('/karyawan/delete/{id}', 'KaryawanController@karyawandelete');
    Route::get('/karyawan/akun/{id}', 'KaryawanController@akun');
    Route::get('/karyawan/reset/{id}', 'KaryawanController@reset');

    Route::get('/gaji', 'GajiController@gaji');
    Route::get('/gaji/periode/{id}', 'GajiController@gajikaryawan');
    Route::get('/gaji/periode/{id}/create', 'GajiController@gajicreate');
    Route::post('/gaji/periode/{id}/create', 'GajiController@gajistore');
    Route::get('/gaji/periode/{id}/delete', 'GajiController@gajidelete');
    Route::get('/gaji/periode/{id}/cetak', 'GajiController@cetak');

    Route::get('/laporan', 'LaporanController@index');
    Route::get('/laporan/karyawan', 'LaporanController@karyawan');
    Route::get('/laporan/cuti', 'LaporanController@cuti');
    Route::get('/laporan/lembur', 'LaporanController@lembur');
});
