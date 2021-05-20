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

// ROTTE PUBBLICHE
Route::view('/', 'homePubblica')
        ->name('homePubblica');

Route::get('/faq', 'ControllerPubblico@mostrafaq')
        ->name('faq');

Route::view('/info', 'info')
        ->name('info');

Route::get('/catalogo', 'ControllerPubblico@mostraCatalogo')
        ->name('catalogo');

Route::post('/catalogo', 'ControllerPubblico@mostraCatalogoFiltrato')
        ->name('catalogoFiltrato');

Route::get('/catalogo/acquisto/{codice_evento}', 'ControllerLivello2@acquisto')
        ->name('acquisto');

Route::get('/catalogo/dettagliEvento/{codice_evento}', 'ControllerPubblico@mostraDettagli')
        ->name('dettagliEvento');

// ROTTE PER AUTENTICAZIONE
Route::get('login', 'Auth\LoginController@showLoginForm')
        ->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')
        ->name('logout');
//FINE

// ROTTE REGISTRAZIONE
Route::get('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register');

Route::post('register', 'Auth\RegisterController@register');
//FINE

// ROTTE POST AUTENTICAZIONE
Route::view('/cliente', 'AreaUtente2')
        ->name('cliente');

Route::view('/amministratore', 'AreaAdmin')
        ->name('amministratore');

Route::view('/organizzatore', 'AreaUtente3')
        ->name('organizzatore');

Route::view('/storico', 'StoricoUtente2')
        ->name('storico');

Route::view('/modificalivello2', 'ModificaUtente2')
        ->name('modificalivello2');

Route::get('/qrcode', function () {
    return QrCode::size(250)
        ->backgroundColor(224, 122, 114)
        ->generate('Margherita Galeazzi');
})->name('qrcode');


/* Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); */
