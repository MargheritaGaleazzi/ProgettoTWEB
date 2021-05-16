<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;



class ControllerLivello2 extends Controller {

    protected $_catalogoModel;
    protected $_faqModel;
    
    
    public function __construct() {
        $this->_catalogoModel = new Catalogo;   
    }

    public function acquisto($codice_evento) {

        //Mostra la finestra con i dettagli dell'evento selezionato
        $evento = $this->_catalogoModel->getEventoByCodice($codice_evento);
        $titolo = $evento->titolo;
        $prezzo = $evento->prezzo_biglietto;
        $locandina = $evento->locandina;
        
        return view('acquisto',['titolo'=>$titolo,
                                                'prezzo'=>$prezzo,
                                                'locandina'=>$locandina
                                            ]);
    }
    

}

