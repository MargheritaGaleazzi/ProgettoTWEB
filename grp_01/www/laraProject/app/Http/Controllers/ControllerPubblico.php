<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Resources\FAQ;
use App\Models\Resources\Partecipero;
use App\Http\Requests\FiltroRequest;
use Carbon\Carbon;


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
        $filtro_luoghi = $this->_catalogoModel->getTabellaEventi()->pluck('luogo', 'luogo');
        $filtro_societa = $this->_catalogoModel->getTabellaEventi()->pluck('societa_organizzatrice', 'societa_organizzatrice');
        foreach($eventi as $evento){
            $data_evento=Carbon::create($evento->data_ora);
            $oggi=Carbon::now();
            $diff=$data_evento->diff($oggi)->format("%a");
            if ($diff>0 && $diff<30){
                $evento->biglietto_scontato=1;
                $evento->save();
            } else if ($diff<=0){
                $evento->stato_evento="chiuso";
                $evento->save();
            }
        }
        return view('catalogo')
                        ->with('eventi', $eventi)
                        ->with('luoghi', $filtro_luoghi)
                        ->with('societa', $filtro_societa);
    }

    public function mostraCatalogoFiltrato(FiltroRequest $request) {
        /* $filtro_luoghi = $this->_catalogoModel->getTuttiEventiSenzaPaginate()->pluck('luogo', 'luogo');
          $filtro_societa = $this->_catalogoModel->getTuttiEventiSenzaPaginate()->pluck('societa_organizzatrice', 'societa_organizzatrice');
          if ($request->get('ricerca') != '') {
          if(str_contains($request->get('ricerca'), ',')){
          $ricercaArrayGrezzo = explode(',', $request->get('ricerca'));
          $ricercaArray = array();
          foreach($ricercaArrayGrezzo as $elementoRicerca){
          $elementoFinale = ltrim($elementoRicerca, ' ');
          array_push($ricercaArray, $elementoFinale);
          }
          $eventi = $this->_catalogoModel->getEventiRicercati($ricercaArray);
          }
          else{
          $eventi = $this->_catalogoModel->getEventiRicercati($request->get('ricerca'));
          }
          } else {
          $luogo = $request->get('luogo');
          $societa = $request->get('societa');
          $data = $request->get('data');
          $eventi = $this->_catalogoModel->getEventiFiltrati($luogo, $societa, $data);
          } */
        $filtro_luoghi = $this->_catalogoModel->getTabellaEventi()->pluck('luogo', 'luogo');
        $filtro_societa = $this->_catalogoModel->getTabellaEventi()->pluck('societa_organizzatrice', 'societa_organizzatrice');
        $luogo = $request->get('luogo');
        $societa = $request->get('societa');
        $data = $request->get('data');
        $descrizione = $request->get('ricerca');
        $eventi = $this->_catalogoModel->getEventiFiltrati($luogo, $societa, $data, $descrizione);

        return view('catalogo')
                        ->with('eventi', $eventi)
                        ->with('luoghi', $filtro_luoghi)
                        ->with('societa', $filtro_societa);
    }

    public function mostraCatalogoRicerca(FiltroRequest $request) {
        
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
        $programma_evento = $evento->programma_evento;
        $indicazioni = $evento->indicazioni;
        $biglietti_rimanenti = $evento->biglietti_rimanenti;

        $partecipero = Partecipero::where('codice_evento', '=', $codice_evento)->count();


        return view('dettagliEvento', ['evento' => $evento,
            'biglietto_scontato' => $biglietto_scontato,
            'sconto' => $sconto,
            'titolo' => $titolo,
            'prezzo' => $prezzo,
            'organizzatore' => $organizzatore,
            'data_ora' => $data_ora,
            'informazioni' => $informazioni,
            'coordinate_maps' => $coordinate_maps,
            'luogo' => $luogo,
            'stato_evento' => $stato_evento,
            'locandina' => $locandina,
            'programma_evento' => $programma_evento,
            'indicazioni' => $indicazioni,
            'partecipero' => $partecipero,
            'biglietti_rimanenti' => $biglietti_rimanenti,
            'sconto' => $sconto
        ]);
    }

}
