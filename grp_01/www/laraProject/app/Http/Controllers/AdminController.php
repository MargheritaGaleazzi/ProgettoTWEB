<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Utente;


class AdminController extends Controller {

    protected $_adminModel;
    protected $_utenteModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_utenteModel = new Utente;
    }

    public function index() {
        return view('AreaAdmin');
    }

    /* public function addProduct() {
        $prodCats = $this->_adminModel->getProdsCats()->pluck('name', 'catId');
        return view('product.insert')
                        ->with('cats', $prodCats);
    } */

    public function vediUtenti(){
        $utenti=$this->_utenteModel->getUtenti();
        $clienti=[];
        $organizzatori=[];
        foreach ($utenti as $utente){
            if ($utente->categoria=='organizzatore'){
                array_push($organizzatori,$utente);
            } else if ($utente->categoria=='cliente'){
                array_push($clienti,$utente);
            }
        }
        return view('gestioneUtenti', ['clienti' => $clienti,
                                    'organizzatori'=>$organizzatori]);
    }
    
    public function aggiungiOrganizzatore(Request $request) {

        $organizzatore = new Utente;
        $organizzatore->categoria='organizzatore';
        $organizzatore->email=$request->email;
        $organizzatore->username=$request->username;
        $organizzatore->password=Hash::make($request->password);
        $organizzatore->via=$Request->via;
        $organizzatore->citta=$Request->citta;
        $organizzatore->cap=$Request->cap;
        $organizzatore->cellulare=$Request->cellulare;
        $organizzatore->nome_societa_organizzatrice=$Request->nome_societa_organizzatrice;
        $organizzatore->save();

        return redirect()->action('AdminController@index');
    }

}
