<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;

class AdminController extends Controller {

    protected $_adminModel;

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin;
    }

    public function index() {
        return view('AreaUtente3');
    }

    /* public function addProduct() {
        $prodCats = $this->_adminModel->getProdsCats()->pluck('name', 'catId');
        return view('product.insert')
                        ->with('cats', $prodCats);
    } */

    public function storeProduct(NewProductRequest $request) {

        if ($request->hasFile('locandina')) {
            $locandina = $request->file('locandina');
            $locandinaName = $locandina->getClientOriginalName();
        } else {
            $locandinaName = NULL;
        }

        $evento = new Evento;
        $evento->fill($request->validated());
        $evento->locandina = $locandinaName;
        $evento->save();

        if (!is_null($locandinaName)) {
            $destinationPath = public_path() . 'public/images/locandine';
            $locandina->move($destinationPath, $locandinaName);
        };

        return redirect()->action('AdminController@index');
    }

}
