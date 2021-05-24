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

Route::get('/storico/{id}', 'ControllerLivello2@mostraStorico')
        ->name('storico');

Route::view('/modificalivello2', 'ModificaUtente2')
        ->name('modificalivello2');

Route::get('/qrcode/{stringa}', function ($stringa) {
    return QrCode::size(250)
        ->backgroundColor(224, 122, 114)
        ->generate("$stringa");
})->name('qrcode');

Route::resource('user','ControllerLivello2');
Route::post('creaBiglietto', 'ControllerLivello2@creaBiglietto')
        ->name('creaBiglietto');

Route::post('partecipero', 'ControllerLivello2@partecipero')
        ->name('partecipero');

//rotte amministratore
Route::get('/gestioneFAQ', 'AdminController@mostrafaq')
        ->name('gestioneFAQ')->middleware('can:isAdmin');

Route::get('/gestioneUtenti', 'AdminController@vediutenti')
        ->name('gestioneUtenti')->middleware('can:isAdmin');

Route::view('AggiungiOrganizzatore', 'RegistrazioneOrganizzatore')
        ->name('AggiungiOrganizzatore')->middleware('can:isAdmin');
Route::post('AggiungiOrganizzatore', 'AdminController@aggiungiOrganizzatore')->middleware('can:isAdmin');

Route::resource('admin','AdminController');
Route::get('/modificaorganizzatore/{id}/modifica', 'AdminController@FormOrganizzatori')
        ->name('modificaorganizzatore')->middleware('can:isAdmin');
Route::get('EliminaUtente/{id}', 'AdminController@cancella')
        ->name('EliminaUtente')->middleware('can:isAdmin');
//ADMIN gestione FAQ
Route::get('EliminaFAQ/{id}', 'AdminController@cancellafaq')
        ->name('EliminaFAQ')->middleware('can:isAdmin');
Route::view('AggiungiFAQ', 'NuovaFAQ')
        ->name('AggiungiFAQ')->middleware('can:isAdmin');
Route::post('AggiungiFAQ', 'AdminController@aggiungifaq')->middleware('can:isAdmin');
Route::resource('faqs','ControllerFAQ')->middleware('can:isAdmin');
Route::get('/modificafaq/{id}/modifica', 'AdminController@FormFAQ')
        ->name('modificafaq')->middleware('can:isAdmin');
Route::get('/statistiche/{id}/vedi', 'AdminController@statistiche')
        ->name('statistiche')->middleware('can:isAdmin');



/* Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); */
