<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Biglietto extends Model{
    
    protected $table = 'biglietto';
    protected $primaryKey = ['codice_biglietto','codice_evento','codice_utente'];
    public $timestamps = false;
}
