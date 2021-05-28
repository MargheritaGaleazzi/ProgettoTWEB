<?php

namespace App\Http\Controllers;

use App\Models\Resources\Utente;
use App\Models\Resources\Evento;
use App\Models\Resources\GestioneEvento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

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

    public function inserisciEvento(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'titolo' => 'required|max:40',
            'locandina' => 'image|max:1024',
            'societa_organizzatrice' => 'required|max:40',
            'prezzo_biglietto' => 'required|numeric|min:0',
            'totale_biglietti_evento' => 'required|numeric|min:0',
            'coordinate_maps' => 'required|max:2500',
            'luogo' => 'required|max:100',
            'indicazioni' => 'required|max:2500',
            'programma_evento' => 'required|max:2500',
            'informazioni' => 'required|max:2500'
        ]);    
        
        
        if ($validator->fails()) {
            return redirect()->action('ControllerLivello3@mostraFormInserimento')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        if ($request->hasFile('locandina')) {
            $image = $request->file('locandina');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }
        
        $nuovoEvento = new Evento; 
        $nuovoEvento->locandina = $imageName;
        $nuovoEvento->societa_organizzatrice=$request->societa_organizzatrice;
        $nuovoEvento->prezzo_biglietto=$request->prezzo_biglietto;
        $nuovoEvento->biglietto_scontato=0;
        $nuovoEvento->sconto=$request->sconto;
        $dateTimeString = $request->data." ".$request->ora;
        $dueDateTime = Carbon::createFromFormat('Y-m-d H:i', $dateTimeString);   
        $nuovoEvento->data_ora=$dueDateTime;
        $nuovoEvento->informazioni=$request->informazioni;
        $nuovoEvento->titolo=$request->titolo;
        $nuovoEvento->totale_biglietti_evento=$request->totale_biglietti_evento;
        $nuovoEvento->biglietti_rimanenti=$request->totale_biglietti_evento;
        $nuovoEvento->coordinate_maps=$request->coordinate_maps;
        $nuovoEvento->luogo=$request->luogo;
        $nuovoEvento->programma_evento=$request->programma_evento;
        $nuovoEvento->indicazioni=$request->indicazioni;
        $nuovoEvento->save();
        
        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/locandine';
            $image->move($destinationPath, $imageName);
        }

        return redirect("organizzatore");
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
