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
        if ($request->hasFile('locandina')) {
            $image = $request->file('locandina');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        
        $nuovoEvento = new Evento;
        $nuovoEvento->societa_organizzatrice=$request->societa_organizzatrice;
        $nuovoEvento->prezzo_biglietto=$request->prezzo_biglietto;
        $nuovoEvento->biglietto_scontato=0;
        $nuovoEvento->sconto=$request->sconto;
        $nuovoEvento->data_ora= time();
        $nuovoEvento->informazioni=$request->informazioni;
        $nuovoEvento->titolo=$request->titolo;
        $nuovoEvento->totale_biglietti_evento=$request->totale_biglietti_evento;
        $nuovoEvento->biglietti_rimanenti=$request->totale_biglietti_evento;
        $nuovoEvento->locandina=$imageName;
        $nuovoEvento->coordinate_maps=$request->coordinate_maps;
        $nuovoEvento->luogo=$request->luogo;
        $nuovoEvento->programma_evento=$request->programma_evento;
        $nuovoEvento->indicazioni=$request->indicazioni;
        
        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/locandine';
            $image->move($destinationPath, $imageName);
        };
        
        $nuovoEvento->save();
        
        return redirect('/');
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
