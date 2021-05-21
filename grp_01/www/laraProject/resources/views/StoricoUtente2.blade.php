<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/meanmenu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/searchbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">


@extends('layout.zonaUtente2')

@section('title', 'Storico')
<!-- inizio della sezione home -->
@section('content')
<div class="container emp-profile">
    
    @isset($biglietti)
    @foreach ($biglietti as $biglietto)
    
    
<div class="ticket">
  
  <div class="ticketdate">
    <span class="ticketday"></span>
    <span class="ticketmonth-and-time">{{ $eventi[$biglietto->codice_biglietto]->data_ora }}</span>
  </div>

  <div class="ticketartist">
    <span class="name">{{ $eventi[$biglietto->codice_biglietto]->titolo }}</span>
    </br>
<span class="live small">{{$eventi[$biglietto->codice_biglietto]->societa_organizzatrice}}</span>
  </div>

  <div class="ticketlocation">
      <?php $stringa=(string)$biglietto->codice_boglietto;?>
      {!! QrCode::generate("$stringa"); !!}
    <span>{{$eventi[$biglietto->codice_biglietto]->luogo}}</span>
    </br>
  </div>

  <div class="ticketrip">
  </div>
  <div class="ticketcta">
    <a class="ticketbutton" href="{{route('qrcode')}}">Codice QR biglietto</a>
  </div>
 
</div>
    @endforeach
    @endisset()
</div>
@endsection

