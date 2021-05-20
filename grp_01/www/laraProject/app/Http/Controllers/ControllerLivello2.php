<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;



class ControllerLivello2 extends Controller {

    protected $_catalogoModel;
    protected $_faqModel;
    
    
    public function __construct() {
        $this->middleware('can:isUser');
        //$this->_utenteModel = new Utente;
        $this->_catalogoModel = new Catalogo;   
    }
    
    public function index() {
        return view('AreaUtente2');
    }

    public function acquisto($codice_evento) {

        //Mostra la finestra con i dettagli dell'evento selezionato
        $evento = $this->_catalogoModel->getEventoByCodice($codice_evento);
        $titolo = $evento->titolo;
        $prezzo = $evento->prezzo_biglietto;
        $locandina = $evento->locandina;
        $biglietto_scontato = $evento->biglietto_scontato;
        $sconto = $evento->sconto;
        
        return view('acquisto',['titolo'=>$titolo,
                                                'evento'=>$evento,
                                                'biglietto_scontato'=>$biglietto_scontato,
                                                'sconto'=>$sconto,
                                                'prezzo'=>$prezzo,
                                                'locandina'=>$locandina
                                            ]);
    }
    

}

