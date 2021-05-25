<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;
use Timestamp;

class Evento extends Model{
    
    protected $table = 'evento';
    protected $primaryKey = 'codice_evento';
    public $timestamps = false;
    
    //trova il prezzo in caso ci sia lo sconto lo applica
    public function getPrezzo($conSconto = false) {
        $prezzo = $this->prezzo_biglietto;
        if (true == ($this->biglietto_scontato) && true == $conSconto) {
            $sconto = ($prezzo * $this->sconto) / 100;
            $prezzo = round($prezzo - $sconto, 2);
        }
        return $prezzo;
    }
    
    /*public function getSconto($date1, $date2) {
      
        $sconto = $this->biglietto_scontato;
        $diff = $date2 - $date1;
        if($diff>1 && $diff<8){
            $sconto = 1;
        }
            
        return $sconto;
    }*/
}
