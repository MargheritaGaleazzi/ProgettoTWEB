<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model{
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    
}
