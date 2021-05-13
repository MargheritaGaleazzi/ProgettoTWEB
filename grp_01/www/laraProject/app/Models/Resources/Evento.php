<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model{
    
    protected $table = 'evento';
    protected $primaryKey = 'codice_evento';
    public $timestamps = false;
}
