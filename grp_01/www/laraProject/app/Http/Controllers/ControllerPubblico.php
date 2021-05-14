<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;

class ControllerPubblico extends Controller {

    protected $_catalogoModel;
    
    public function __construct() {
        $this->_catalogoModel = new Catalogo;
    }

    public function mostraCatalogo() {

        //Categorie Top
        $eventi = $this->_catalogoModel->getTuttiEventi();
        

        return view('catalogo')
                        ->with('eventi', $eventi);
    }

}