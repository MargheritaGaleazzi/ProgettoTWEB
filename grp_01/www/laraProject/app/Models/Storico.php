<?php

namespace App\Models;

use App\Models\Resources\Biglietto;
use App\Models\Resources\Utente;


class Storico {

    public function getBigliettiUtente($codice_utente, $paginazione = 1){
         $biglietti=Biglietto::where('codice_utente',$codice_utente)->get();
         return $eventi->paginate($paginazione);
    }
}