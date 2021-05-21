<?php

namespace App\Models;

use App\Models\Resources\Evento;


class Catalogo {
    
        public function getTuttiEventiSenzaPaginate() {
         
         return Evento::all();
    }

    public function getTuttiEventi() {
         
         return Evento::paginate(4);
    }
    
    public function getEventoByCodice($codice_evento) {

        return Evento::where('codice_evento', $codice_evento)->first();      
    }
    
    public function getEventiRicercati($testo){
        if(is_array($testo)){
            if(count($testo)==3){
                return Evento::where('informazioni', 'LIKE', '%'.strval($testo[0]).'%')
                        ->where('luogo', 'LIKE', '%'.strval($testo[1]).'%')
                        ->where('data_ora', 'LIKE', '%'.strval($testo[2]).'%')
                        ->paginate(4);
            }
            elseif(count($testo)==2){
                return Evento::where('informazioni', 'LIKE', '%'.strval($testo[0]).'%')
                        ->where('luogo', 'LIKE', '%'.strval($testo[1]).'%')
                        ->paginate(4);
            }
        }
        return Evento::where('informazioni', 'LIKE', '%'.$testo.'%')
                ->orWhere('luogo', 'LIKE', '%'.$testo.'%')
                ->orWhere('data_ora', 'LIKE', '%'.$testo.'%')
                ->paginate(4);
    }
    
    public function getEventiFiltrati($luogo = null, $societa = null, $data = null){
        if (is_null($luogo) && is_null($societa) && $data=='01-0000'){
            return Evento::paginate(4);
        }
        elseif(is_null($luogo) && is_null($societa)){
            return Evento::whereYear('data_ora', substr($data, 3, 7))
                    ->whereMonth('data_ora', substr($data, 0, 2))
                    ->paginate(4);
        }
        elseif(is_null($luogo) && $data=='01-0000'){
            return Evento::where('societa_organizzatrice', $societa)
                    ->paginate(4);
        }
        elseif(is_null($societa) && $data=='01-0000'){
            return Evento::where('luogo', $luogo)
                    ->paginate(4);
        }
        elseif(is_null($luogo)){
            return Evento::whereYear('data_ora', substr($data, 3, 7))
                    ->whereMonth('data_ora', substr($data, 0, 2))
                    ->where('societa_organizzatrice', $societa)
                    ->paginate(4);
        }
        elseif(is_null($societa)){
            return Evento::whereYear('data_ora', substr($data, 3, 7))
                    ->whereMonth('data_ora', substr($data, 0, 2))
                    ->where('luogo', $luogo)
                    ->paginate(4);
        }
        elseif($data=='01-0000'){
            return Evento::where('luogo', $luogo)
                    ->where('societa_organizzatrice', $societa)
                    ->paginate(4);
        }
        return Evento::whereYear('data_ora', substr($data, 3, 7))
                ->whereMonth('data_ora', substr($data, 0, 2))
                ->where('societa_organizzatrice', $societa)
                ->where('luogo', $luogo)
                ->paginate(4);
    }
    
    public function getEventoConFiltri($descr=null, $luogo = null, $data= null) {
        /*$eventi=Evento::all();
        if (is_null($descr)&& is_null($data)) {
            $eventi=$eventi->where('luogo', $luogo);
        }       
        $eventi=$eventi->where('luogo', $luogo);*/
        return Evento::where('luogo', $luogo)->first();
    }
    
    
    /*public function getEventiFiltrati($descr=null,$reg=null,$date=null) {
        $dataDivisa=explode("-",$date);
        //se non specifico descrizone e regione ricerca per data
        if ((is_null($descr))&&((is_null($reg)))){
            return Evento::where(year('data_ora'), $dataDivisa[0])->where(month('data_ora'), $dataDivisa[1])->get()->paginate(2);
        }
        //se non specifico descrizone e data ricerca per regione
        if ((is_null($descr))&&((is_null($date)))){
           return Evento::where('luogo', $reg)->get()->paginate(2); 
        }
        //se non specifico regione e data ricerca per descrizione
        if ((is_null($reg))&&((is_null($date)))){
           return Evento::whereIn('informazioni', $descr)->get()->paginate(2); 
        }
        //se non specifico regione ricerca per descrizione e data
        if ((is_null($reg))){
           return Evento::where(year('data_ora'), $dataDivisa[0])->where(month('data_ora'), $dataDivisa[1])->whereIn('informazioni', $descr)->get()->paginate(2); 
        }
        //se non specifico descrizione ricerca per regione e data
        if ((is_null($descr))){
           return Evento::where('luogo', $reg)->where(year('data_ora'), $dataDivisa[0])->where(month('data_ora'), $dataDivisa[1])->get()->paginate(2); 
        }
        //se non specifico data ricerca per regione e descrizione
        if ((is_null($date))){
           return Evento::where()->get()->paginate(2);
           Evento::where('luogo', $reg)->whereIn('informazioni', $descr)->get()->paginate(2);
        }
        //se non specifico descrizione ricerca per regione e data
        if ((!is_null($descr))&&(!is_null($reg))&&(!is_null($date))){
           return Evento::where('luogo', $reg)->where(year('data_ora'), $dataDivisa[0])->where(month('data_ora'), $dataDivisa[1])->whereIn('informazioni', $descr)->get()->paginate(2); 
        }
    }*/
}
