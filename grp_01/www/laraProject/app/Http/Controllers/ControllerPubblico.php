<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Resources\FAQ;


class ControllerPubblico extends Controller {

    protected $_catalogoModel;
    protected $_faqModel;
    
    
    public function __construct() {
        $this->_catalogoModel = new Catalogo;
        $this->_faqModel = new FAQ;
        
    }

    public function mostraCatalogo() {

        //Mostra il catalogo con tutti gli eventi
        $eventi = $this->_catalogoModel->getTuttiEventi();
        

        return view('evento\catalogo')
                        ->with('eventi', $eventi);
    }
    
    public function mostrafaq() {

        //Prende tutte le FAQ
        $faq = $this->_faqModel->getfaq();
        

        return view('info\faq')
                        ->with('faq', $faq);
    }
    
    public function mostraDettagli($codice_evento) {

        //Mostra la finestra con i dettagli dell'evento selezionato
        $evento = $this->_catalogoModel->getEventoByCodice($codice_evento);
        $titolo = $evento->titolo;
        
        return view('evento\dettagliEvento')
                        ->with('eventoSelezionato', $evento)
                        ->with('titolo', $titolo);
    }
    

}