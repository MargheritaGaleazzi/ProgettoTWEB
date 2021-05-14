<?php

namespace App\Models;

use App\Models\Resources\Evento;


class Catalogo {

    public function getTuttiEventi() {
         $eventi=Evento::all()->get();
         return $eventi->paginate(2);
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
