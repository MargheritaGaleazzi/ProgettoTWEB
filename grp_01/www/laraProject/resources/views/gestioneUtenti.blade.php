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


@extends('layout.zonaAdmin')

@section('title', 'Gestione Utenti')

@section('content')

<div class="table-users">
   <div class="headertable">CLIENTI</div>
   
   <table class="user" cellspacing="0">
      <tr>
         <th width="180">E-mail</th>
         <th width="180">Username</th>
         <th width="180">Nome</th>
         <th width="180">Cognome</th>
         <th width="180">Via</th>
         <th width="180">Citta</th>
         <th width="180">CAP</th>
         <th width="180">Sesso</th>
         <th width="180">Cellulare</th>
         <th></th>
      </tr>

      <tr>
         <td>EMAIL@EMAIL.IT</td>
         <td>USERNAME</td>
         <td>NOME</td>
         <td>COGNOME</td>
         <td>VIAVIAVIA</td>
         <td> CITTA </td>
         <td> CAP </td>
         <td> SESSO </td>
         <td> CELLULARE </td>
         <td> <a href="#"><button class="btn btn-primary btn-sm" type="button">Elimina</button></a> </td>
      </tr>
   </table>
</div>

@endsection

