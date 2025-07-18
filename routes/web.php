<?php


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Pengunjung.home');
})->name('home');
Route::get('/tentangkami', function () {
    return view('Pengunjung.tentangkami');
})->name('tentangkami');
Route::get('/paketwisata', function () {
    return view('Pengunjung.paketwisata');
})->name('paketwisata');
Route::get('/galeri', function () {
    return view('Pengunjung.galeri');
})->name('galeri');
Route::get('/kalender', function () {
    return view('Pengunjung.kalender');
})->name('kalender');

Route::view('/detailpaketmakrab', 'Pengunjung.detailpaketmakrab')->name('detailpaketmakrab');
Route::view('/detailpaketsikrab', 'Pengunjung.detailpaketsikrab')->name('detailpaketsikrab');
Route::view('/detailpaketpramuka', 'Pengunjung.detailpaketpramuka')->name('detailpaketpramuka');
Route::view('/detailpaketpernikahan', 'Pengunjung.detailpaketpernikahan')->name('detailpaketpernikahan');
Route::view('/detailpaketcamping', 'Pengunjung.detailpaketcamping')->name('detailpaketcamping');
Route::view('/detailpakethomestay', 'Pengunjung.detailpakethomestay')->name('detailpakethomestay');
use Illuminate\Http\Request;

Route::get('/formbooking', function (Request $request) {
    return view('Pengunjung.formbooking');
})->name('formbooking');


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/datawisata', function () {
    return view('admin.datawisata');
});
// Submenu dari Data Wisata
Route::get('/admin/datawisata/tentang-kami', function () {
    return view('admin.datawisata.tentang-kami');
});

Route::get('/admin/datawisata/carousel', function () {
    return view('admin.datawisata.carousel');
});

Route::get('/admin/datawisata/event', function () {
    return view('admin.datawisata.event');
});

Route::get('/admin/paketdestinasi', function () {
    return view('admin.paketdestinasi');
});

Route::get('/admin/galeri', function () {
    return view('admin.galeri');
});

Route::get('/admin/kalender', function () {
    return view('admin.kalender');
});

Route::get('/admin/kunjungan', function () {
    return view('admin.kunjungan');
});

Route::get('/admin/booking', function () {
    return view('admin.booking');
});