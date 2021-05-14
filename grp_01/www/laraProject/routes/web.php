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
Route::view('/', 'homePubblica')
        ->name('homePubblica');
Route::view('/faq', 'faq')
        ->name('faq');
Route::view('/info', 'info')
        ->name('info');
Route::view('/catalogo', 'catalogo')
        ->name('catalogo');
Route::view('/login', 'AreaUtente2')
        ->name('login');
Route::view('/storico', 'StoricoUtente2')
        ->name('storico');
Route::get('/qrcode', function () {
    return QrCode::size(250)
        ->backgroundColor(255, 255, 204)
        ->generate('Margherita Galeazzi');
})
->name('qrcode');

