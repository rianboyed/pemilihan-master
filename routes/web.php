<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.welcome');
});

Auth::routes();

// BACKEND
    // CALON

    Route::resource('calon','backend\calonController');
    Route::get('/calon/hapus/{id}','backend\calonController@delete');

//no urutan
Route::resource('urutan','Nomor_urutController');
Route::get('edit/{id}','Nomor_urutController@edit');
Route::get('/urutan/hapus/{id}', 'Nomor_urutController@delete');

    /// PASANGAN
    Route::resource('pasangan','backend\pasanganController');
    Route::get('select-ketua','backend\pasanganController@select_ketua');
    Route::get('select-wakil','backend\pasanganController@select_wakil');
    Route::get('getcalonId/{id}','backend\pasanganController@get_calon_by_id');
    Route::get('visi-store','backend\pasanganController@visi_store');
    // PEMILIH
    // Route::get('pemilih-aktif','backend\pemilihController@pemilih');
    Route::resource('pemilih-aktif','backend\pemilihController');
    //detail visi & misi
    Route::get('detail/{id}','frontend\Calon_controller@detail');

// FRONTEND
    // Pasangan
    Route::get('voting','frontend\pasanganController@pasangan');
    Route::get('proses-voting','frontend\pasanganController@voting');

    //grafik
    Route::get('dokumentasi/grafik','Grafik_controller@index');

    

Route::get('/home', 'HomeController@index')->name('home');
