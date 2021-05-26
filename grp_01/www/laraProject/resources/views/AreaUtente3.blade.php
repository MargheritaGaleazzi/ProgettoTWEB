@extends('layout.zonaUtente3')

@section('title', 'Organizzatore')

<!-- inizio della sezione home -->
@section('content')
<div class="static">
    <h3>Area Organizzatore</h3>
    {{-- <p>Benvenuto {{ Auth::user()->nome }} {{ Auth::user()->cognome }}</p> --}}
    <p>Seleziona la funzione da attivare</p>
</div>
@endsection
