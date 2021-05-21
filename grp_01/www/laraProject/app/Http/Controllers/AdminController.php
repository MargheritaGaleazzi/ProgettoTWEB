<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Utente;


class AdminController extends Controller {

    protected $_adminModel;
    protected $_utenteModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin;
        $this->_utenteModel = new Utente;
    }

    public function index() {
        return view('AreaAdmin');
    }

    /* public function addProduct() {
        $prodCats = $this->_adminModel->getProdsCats()->pluck('name', 'catId');
        return view('product.insert')
                        ->with('cats', $prodCats);
    } */

    public function aggiungiOrganizzatore(Request $request) {

        $organizzatore = new Utente;
        $organizzatore->categoria='organizzatore';
        $organizzatore->email=$request->email;
        $organizzatore->username=$request->username;
        $organizzatore->password=Hash::make($request->password);
        $organizzatore->via=$Request->via;
        $organizzatore->citta=$Request->citta;
        $organizzatore->cap=$Request->cap;
        $organizzatore->cellulare=$Request->cellulare;
        $
        $organizzatore->save();

        if (!is_null($locandinaName)) {
            $destinationPath = public_path() . 'public/images/locandine';
            $locandina->move($destinationPath, $locandinaName);
        };

        return redirect()->action('AdminController@index');
    }

}
