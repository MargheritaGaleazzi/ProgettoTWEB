<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Resources\FAQ;
use App\Http\Requests\FiltroRequest;


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
        $filtro_luoghi = $this->_catalogoModel->getTuttiEventiSenzaPaginate()->pluck('luogo', 'luogo');
        $filtro_societa = $this->_catalogoModel->getTuttiEventiSenzaPaginate()->pluck('societa_organizzatrice', 'societa_organizzatrice');
        return view('catalogo')
                        ->with('eventi', $eventi)
                        ->with('luoghi', $filtro_luoghi)
                        ->with('societa', $filtro_societa);
    }
    
    public function mostraCatalogoFiltrato(FiltroRequest $request){
        $filtro_luoghi = $this->_catalogoModel->getTuttiEventiSenzaPaginate()->pluck('luogo', 'luogo');
        $filtro_societa = $this->_catalogoModel->getTuttiEventiSenzaPaginate()->pluck('societa_organizzatrice', 'societa_organizzatrice');
        $luogo = $request->get('luogo');
        $societa = $request->get('societa');
        $data = $request->get('data');
        $eventi = $this->_catalogoModel->getEventiFiltrati($luogo, $societa, $data);
        return view('catalogo')
                         ->with('eventi', $eventi)
                        ->with('luoghi', $filtro_luoghi)
                        ->with('societa', $filtro_societa);
        
    }
    
    public function mostrafaq() {

        //Prende tutte le FAQ
        $faq = $this->_faqModel->getfaq();
        

        return view('faq')
                        ->with('faq', $faq);
    }
    
    public function mostraDettagli($codice_evento) {

        //Mostra la finestra con i dettagli dell'evento selezionato
        $evento = $this->_catalogoModel->getEventoByCodice($codice_evento);
        $titolo = $evento->titolo;
        $prezzo = $evento->prezzo_biglietto;
        $organizzatore = $evento->societa_organizzatrice;
        $data_ora = $evento->data_ora;
        $informazioni = $evento->informazioni;
        $coordinate_maps = $evento->coordinate_maps;
        $luogo = $evento->luogo;
        $stato_evento = $evento->stato_evento;
        $locandina = $evento->locandina;
        $biglietto_scontato = $evento->biglietto_scontato;
        $sconto = $evento->sconto;
        $programma_evento=$evento->programma_evento;
        $indicazioni=$evento->indicazioni;
        
        
        return view('dettagliEvento',[          'evento'=>$evento,
                                                'biglietto_scontato'=>$biglietto_scontato,
                                                'sconto'=>$sconto,
                                                'titolo'=>$titolo,
                                                'prezzo'=>$prezzo,
                                                'organizzatore'=>$organizzatore,
                                                'data_ora'=>$data_ora,
                                                'informazioni'=>$informazioni,
                                                'coordinate_maps'=>$coordinate_maps,
                                                'luogo'=>$luogo,
                                                'stato_evento'=>$stato_evento,
                                                'locandina'=>$locandina,
                                                'programma_evento'=>$programma_evento,
                                                'indicazioni'=>$indicazioni
                                            ]);
    }
    

}