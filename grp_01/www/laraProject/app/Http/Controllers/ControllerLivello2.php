<?php

namespace App\Http\Controllers;
use App\Models\Resources\Utente;
use App\Models\Resources\Biglietto;
use App\Models\Resources\Evento;
use App\Models\Resources\Partecipero;
use App\Models\Catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\NuovoBigliettoRequest;



class ControllerLivello2 extends Controller {

    protected $_catalogoModel;
    protected $_utenteModel;
    protected $_bigliettogoModel;
    protected $_eventoModel;


    
    
    public function __construct() {
        $this->middleware('can:isUser');
        $this->_utenteModel = new Utente;
        $this->_catalogoModel = new Catalogo; 
        $this->_bigliettoModel = new Biglietto;
        $this->_eventoModel = new Evento;
        $this->_parteciperoModel = new Partecipero; 
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
    
    /*public function modificaDati($newnome,$newcognome,$newemail,$newsesso,$newcitta,$newvia,$newcap,$newcellulare) {

        //Mostra la finestra con i dettagli dell'evento selezionato
        $utente_id = Auth::user()->id;
        $ut=$this->_utenteModel->getUtenteById($utente_id);
        $ut->nome=$newnome;
        $ut->conome=$newcognome;
        $ut->email=$newemail;
        $ut->sesso=$newsesso;
        $ut->citta=$newcitta;
        $ut->via=$newvia;
        $ut->cap=$newcap;
        $ut->cellulare=$newcellulare;
        return view('cliente');
    }*/
    public function update(Request $request, $id)
{
    $ut= Utente::find($id);
    $ut->nome = $request->nome;
    $ut->cognome=$request->cognome;
    $ut->email=$request->email;
    $ut->sesso=$request->sesso;
    $ut->citta=$request->citta;
    $ut->via=$request->via;
    $ut->cap=$request->cap;
    $ut->cellulare=$request->cellulare;
    $ut->save();

    return redirect('cliente');
}
    
    public function creaBiglietto(NuovoBigliettoRequest $request)
    {
        
        $biglietto=new Biglietto;
        $biglietto->fill($request->validated());
        $biglietto->id=$request->id;
        $biglietto->codice_evento=$request->codice_evento;
        $biglietto->metodo_pagamento=$request->metodo_pagamento;
        $biglietto->prezzo_acquisto=($request->prezzo)*($request->quantita);
        $biglietto->quantita=$request->quantita;
        $biglietto->save();
        
        $evento=Evento::find($request->codice_evento);
        $evento->biglietti_rimanenti=($evento->biglietti_rimanenti)-($request->quantita);
        $evento->save();
        
        return redirect('/');
    }
    
    public function mostraStorico($id) {

        //Mostra lo storico con tutti gli eventi
        $biglietti = $this->_bigliettoModel->getBigliettiUtente($id);
        $eventi=[];
        foreach ($biglietti as $biglietto){
          $indice=$biglietto->codice_biglietto;
          $evento = $this->_catalogoModel->getEventoByCodice($biglietto->codice_evento); 
          $eventi[$indice]=$evento;
        }
       /*$codice_biglietto=$this->codice_biglietto;
        $codice_evento=$this->codice_evento;
        $evento=$this->_eventoModel->getEventoByCodice($codice_evento);
        $titolo = $evento->titolo;
        $data_ora = $evento->data_ora;
        $luogo = $evento->luogo;*/
        
    return view('StoricoUtente2', ['biglietti' => $biglietti,
                                    'eventi'=>$eventi])
                        /*->with('codice_biglietto', $codice_biglietto)
                        ->with('codice_evento', $codice_evento)
                        ->with('evento', $evento)
                        ->with('titolo', $titolo)
                        ->with('data_ora', $data_ora)
                        ->with('luogo', $luogo)*/;
    }
    
    public function partecipero(Request $request){
       
        /*$gia=Partecipero::where('codice_utente', $request->id)->where('codice_evento', $request->codice_evento)->get();*/
       
        $partecip = Partecipero::firstOrCreate(['codice_utente' => $request->id,
                                                'codice_evento'=>$request->codice_evento]);
       
            /*$partecip=new Partecipero;
            $partecip->codice_utente=$request->id;
            $partecip->codice_evento=$request->codice_evento;
            $partecip->save();
            
            $evento=Evento::find($request->codice_evento);
            $evento->partecipero=($evento->partecipero)+1;
            $evento->save();*/
            
        
        return redirect('catalogo');
    }
    
        
    
    public function vedipartecipero($id) {

        //Mostra il catalogo con tutti gli eventi
        $partecip = Partecipero::where('codice_utente','=',$id)->get();
        $eventi=[];
          foreach ($partecip as $partecipero){
          $evento = Evento::find($partecipero->codice_evento); 
          array_push($eventi,$evento);
          
        }
            
        return view('partecipero', ['partecip' => $partecip,
                                            'eventi'=>$eventi]);
    }
}

