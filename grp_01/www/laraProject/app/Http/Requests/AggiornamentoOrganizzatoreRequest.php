<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NuovoOrganizzatoreRequest extends FormRequest {

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
            'email' => 'required|string|email|max:255',
            'nome_societa_organizzatrice' => 'required|string|max:255',
            'username' => 'required|string|min:8|unique:users',
            'via' => 'required|string',
            'citta' => 'required|string',
            'cap' => 'required|string|min:5|max:5',
            'sesso' => 'required|string',
            'cellulare' => 'string'
            
        ];
    }

}

