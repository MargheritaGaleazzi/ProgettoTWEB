<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NuovoEventoRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'titolo' => 'required|max:25',
            'locandina' => 'image|max:1024',
            'prezzo' => 'required|numeric|min:0',
            'data' => 'required|max:10',
            'ora' => 'required|max:5',
            'indicazioni' => 'required|max:2500',
            'informazioni' => 'required|max:2500'
        ];
    }

}
