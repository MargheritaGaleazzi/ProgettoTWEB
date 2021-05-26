@extends('layout.zonaUtente3')

@section('title', 'Organizzatore')

<!-- inizio della sezione home -->
@section('content')
{{-- <div class="static">
    <h3>Area Organizzatore</h3>
    <p>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</p>
    <p>Seleziona la funzione da attivare</p>
</div> --}}

<div class="container-contact">
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <h2 class="active">Area Organizzatore</h2>
            <h2 class="active">Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}<h2>

         <div class="wrapper fadeInDown">
                <a href="{{ route('gestioneEventi', [Auth::user()->id]) }}" title="Inserisci nuovi eventi">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Gestione eventi"/>
                </a>
        </div>
    </div>
</div>
@endsection
