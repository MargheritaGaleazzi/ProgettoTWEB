@extends('layout.zonaAdmin')

@section('title', 'Admin')
<!-- inizio della sezione home -->
@section('content')
<div class="static">
    <h3>Area Amministratore</h3>
    <p>Benvenuto {{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
    <p>Seleziona la funzione da attivare</p>
</div>
@endsection
