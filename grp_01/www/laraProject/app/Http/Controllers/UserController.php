<?php

namespace App\Http\Controllers;



class userController extends Controller {

    public function __construct() {
        $this->middleware('auth');  //verifica che l'utente sia autenticato
    }

    public function index() {
        return view('user');
    }
}
