<?php

namespace App\Http\Controllers;

use App\Models\Resources\Utente;
use App\Models\Resources\Evento;
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

    public function mostraFormInserimento() {
        return view('InserimentoEvento');
    }

    public function inserisciEvento(NuovoEventoRequest $request) {
        
        $nuovoEvento = new Evento;
        $nuovoEvento->titolo=$request->titolo;
        $nuovoEvento->locandina=$request->locandina;
        $nuovoEvento->societa_organizzatrice=$request->societa_organizzatrice;
        $nuovoEvento->prezzo_biglietto=$request->prezzo_biglietto;
        $nuovoEvento->sconto=$request->sconto;
        $nuovoEvento->data_ora=$request->data_ora;
        $nuovoEvento->totale_biglietti_evento=$request->totale_biglietto_evento;
        $nuovoEvento->biglietti_rimanenti=$request->biglietti_rimanenti;
        $nuovoEvento->coordinate_maps=$request->coordinate_maps;
        $nuovoEvento->luogo=$request->luogo;
        $nuovoEvento->programma_evento=$request->programma_evento;
        $nuovoEvento->indicazioni=$request->indicazioni;
        $nuovoEvento->informazioni=$request->informazioni;
        $nuovoEvento->save();
        //$id = Auth::user()->nome;
        //return $id;
      // return redirect()->action('ControllerLivello3@mostraGestioneEventi', ['']);
        return redirect('organizzatore');
    }

    public function eliminaEvento($id) {
        Evento::find($id)->delete();
        return redirect("organizzatore");
    }

    public function modificaEvento($id) {
        $evento = Evento::find($id);
        return view('ModificaEvento')
                ->with('evento', $evento);
    }
    
    public function applicaModifica(){
        
    }

}
