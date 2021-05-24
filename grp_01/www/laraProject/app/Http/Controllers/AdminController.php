<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Utente;
use App\Models\Resources\Biglietto;
use App\Models\Resources\Evento;
use App\Models\Resources\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller {

    protected $_adminModel;
    protected $_utenteModel;
    protected $_faqModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_utenteModel = new Utente;
        $this->_faqModel = new FAQ;
    }

    public function index() {
        return view('AreaAdmin');
    }

    /* public function addProduct() {
        $prodCats = $this->_adminModel->getProdsCats()->pluck('name', 'catId');
        return view('product.insert')
                        ->with('cats', $prodCats);
    } */
    public function mostrafaq() {

        //Prende tutte le FAQ
        $faq = $this->_faqModel->getfaq();


        return view('gestioneFAQ')
                        ->with('faq', $faq);
    }
    
    public function cancellafaq($id) {
        FAQ::find($id)->delete();
        return redirect('gestioneFAQ');
    }
    
    public function aggiungifaq(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'domanda' => 'required|string|unique:faq|max:255',
            'risposta' => 'required|string|max:255',
        ]);
        

        if ($validator->fails()) {
            return redirect('NuovaFAQ')
                        ->withErrors($validator)
                        ->withInput();
        }

        $faq = new FAQ;
        $faq->domanda=$request->domanda;
        $faq->risposta=$request->risposta;
        $faq->save();

        return redirect('gestioneFAQ');
    }
    


public function FormFAQ($id) {
    $faq= FAQ::find($id);
    return view('ModificaFaq', ['faq' => $faq]);
    
}

    public function vediUtenti(){
        $utenti=$this->_utenteModel->getUtenti();
        $clienti=[];
        $organizzatori=[];
        foreach ($utenti as $utente){
            if ($utente->categoria=='organizzatore'){
                array_push($organizzatori,$utente);
            } else if ($utente->categoria=='cliente'){
                array_push($clienti,$utente);
            }
        }
        return view('gestioneUtenti', ['clienti' => $clienti,
                                    'organizzatori'=>$organizzatori]);
    }
    
    public function aggiungiOrganizzatore(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|unique:users|max:255',
            'nome_societa_organizzatrice' => 'required|string|max:255',
            'username' => 'required|string|min:8|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'via' => 'required|string',
            'citta' => 'required|string',
            'cap' => 'required|string|min:5|max:5',
            'sesso' => 'required|string',
            'cellulare' => 'string',
        ]);
        

        if ($validator->fails()) {
            return redirect('AggiungiOrganizzatore')
                        ->withErrors($validator)
                        ->withInput();
        }

        $organizzatore = new Utente;
        $organizzatore->categoria='organizzatore';
        $organizzatore->email=$request->email;
        $organizzatore->username=$request->username;
        $organizzatore->password=Hash::make($request->password);
        $organizzatore->via=$request->via;
        $organizzatore->citta=$request->citta;
        $organizzatore->cap=$request->cap;
        $organizzatore->cellulare=$request->cellulare;
        $organizzatore->nome_societa_organizzatrice=$request->nome_societa_organizzatrice;
        $organizzatore->sesso=$request->sesso;
        $organizzatore->save();

        return redirect('/');
    }
    
    public function update(Request $request, $id)
{
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'nome_societa_organizzatrice' => 'required|string|max:255',
            'username' => 'required|string|min:8|unique:users',
            'via' => 'required|string',
            'citta' => 'required|string',
            'cap' => 'required|string|min:5|max:5',
            'sesso' => 'required|string',
            'cellulare' => 'string',
        ]);
        

        if ($validator->fails()) {
            return redirect()->route('modificaorganizzatore',[$id])
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $organizzatore= Utente::find($id);
        $organizzatore->categoria='organizzatore';
        $organizzatore->email=$request->email;
        $organizzatore->username=$request->username;
        $organizzatore->via=$request->via;
        $organizzatore->citta=$request->citta;
        $organizzatore->cap=$request->cap;
        $organizzatore->cellulare=$request->cellulare;
        $organizzatore->nome_societa_organizzatrice=$request->nome_societa_organizzatrice;
        $organizzatore->sesso=$request->sesso;
        $organizzatore->save();
  

    return redirect('gestioneUtenti');
}
public function FormOrganizzatori($id) {
    $organizzatore= Utente::find($id);
    return view('ModificaOrganizzatore', ['organizzatore' => $organizzatore]);
    
}

    public function cancella($id) {
        Utente::find($id)->delete();
        return redirect('gestioneUtenti');
    }
    
    public function statistiche($id) {
        $organizzatore=Utente::find($id);
        $tutti_eventi=Evento::all();
        $id_eventi=[];
        $tutti_biglietti=Biglietto::all();
        $biglietti=[];
        $incasso=0;
        $biglietti_totali=0;
        $biglietti_rimasti=0;
        $biglietti_venduti=0;
        
        foreach ($tutti_eventi as $evento){
            if ($evento->societa_organizzatrice==$organizzatore->nome_societa_organizzatrice){
            array_push($id_eventi,$evento->codice_evento);
            $biglietti_totali=$biglietti_totali+$evento->totale_biglietti_evento;
            $biglietti_rimasti=$biglietti_rimasti+$evento->biglietti_rimanenti;
            }
        }
        foreach ($tutti_biglietti as $biglietto) {
            foreach ($id_eventi as $id){
                if($biglietto->codice_evento==$id){
                    array_push($biglietti,$biglietto);
                }
            }
        }
        foreach ($biglietti as $bigl){
            $incasso=$incasso+$bigl->prezzo_acquisto;
            $biglietti_venduti=$biglietti_venduti+$bigl->quantita;
        }
        $percent_bv=round((($biglietti_venduti*100)/$biglietti_totali),2);
       
        return view('Statistiche', ['organizzatore' => $organizzatore,
                                    'incasso'=>$incasso,
                                    'biglietti_venduti'=>$biglietti_venduti,
                                    'biglietti_totali'=>$biglietti_totali,
                                    'biglietti_rimasti'=>$biglietti_rimasti,
                                    'percent_bv'=>$percent_bv]); 
    }

}
