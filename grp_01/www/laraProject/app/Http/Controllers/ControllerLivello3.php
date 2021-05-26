<?php

namespace App\Http\Controllers;

use App\Models\Resources\Utente;
use App\Models\Resources\GestioneEvento;
use App\Http\Requests\NuovoEventoRequest;
use App\Http\Controllers\Auth;

class ControllerLivello3 extends Controller {

    protected $_gestioneEventoModel;
    protected $_utenteModel;

    public function __construct() {

        $this->middleware('can:isOrganizer');
        $this->_gestioneEventoModel = new GestioneEvento;
        $this->_utenteModel = new Utente;
    }

    public function mostraGestioneEventi($id) {
        $utente = $this->_utenteModel->getUtenteById($id);
        $societa = $utente->pluck('nome_societa_organizzatrice');
        $eventi = $this->_gestioneEventoModel->getEventiBySocieta($societa[0]);
        return view('GestioneEventi')
                        ->with('eventi', $eventi);
    }
    
    public function mostraFormInserimento(){
        return view('InserimentoEvento');
    }
    
    public function inserisciEvento(NuovoEventoRequest $request){
        $id = Auth::user()->nome;
        return $id;
        return redirect()->action('ControllerLivello3@mostraGestioneEventi', ['']);
    }

}
