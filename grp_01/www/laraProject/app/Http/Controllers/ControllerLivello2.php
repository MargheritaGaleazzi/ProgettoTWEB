<?php

namespace App\Http\Controllers;
use App\Models\Resources\Utente;
use App\Models\Resources\Biglietto;
use App\Models\Catalogo;
use Illuminate\Http\Request;



class ControllerLivello2 extends Controller {

    protected $_catalogoModel;
    protected $_utenteModel;


    
    
    public function __construct() {
        $this->middleware('can:isUser');
        $this->_utenteModel = new Utente;
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
    
    public function creaBiglietto(Request $request)
    {
        $biglietto=new Biglietto;
        $biglietto->id=$request->id;
        $biglietto->codice_evento=$request->codice_evento;
        $biglietto->metodo_pagamento=$request->metodo_pagamento;
        $biglietto->prezzo_acquisto=($request->prezzo)*($request->quantita);
        $biglietto->save();
        
        return redirect('/');
    }

}

