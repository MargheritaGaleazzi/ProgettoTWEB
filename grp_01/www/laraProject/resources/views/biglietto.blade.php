@extends('layout.AreaUtente2')

@section('title', 'Biglietti')
<!-- inizio della sottosezione Biglietti -->
@section('subcontent')
<div class="ticket ticket-1">
  
  <div class="ticketdate">
    <span class="ticketday">31</span>
    <span class="ticketmonth-and-time">OCT</br><span class="ticketsmall">8PM</span></span>
  </div>

  <div class="ticketartist">
    <span class="name">PETER TOSH</span>
    </br>
<span class="live small">LIVE</span>
  </div>

  <div class="ticketlocation">
    <span>KINGSTON TOWN</span>
    </br>
  </div>

  <div class="ticketrip">
  </div>
  <div class="ticketcta">
    <button class="ticketinfo" href="{{route('qrcode')}}">DETTAGLI EVENTO</button>
  </div>

</div>
@endsection

