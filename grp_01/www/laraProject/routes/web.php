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
Route::get('/faq', 'ControllerPubblico@mostrafaq')
        ->name('faq');
Route::view('/info', 'info')
        ->name('info');
Route::get('/catalogo', 'ControllerPubblico@mostraCatalogo')
        ->name('catalogo');
Route::view('/login', 'loginUtenti')
        ->name('login');
Route::view('/registrazione', 'registrazioneUtenti')
        ->name('registrazione');
Route::view('/utente', 'AreaUtente2')
        ->name('utente');
Route::view('/storico', 'StoricoUtente2')
        ->name('storico');
Route::get('/qrcode', function () {
    return QrCode::size(250)
        ->backgroundColor(224, 122, 114)
        ->generate('Margherita Galeazzi');
})
->name('qrcode');

