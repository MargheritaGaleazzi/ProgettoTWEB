@extends('layout.zonaPubblica')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row">
        <div class=" col-md-6 offset-md-3">
            <div class="address">
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                      <!-- Tabs Titles -->
                      <h2 class="active"> Accedi </h2>
    
                      <!-- Login Form -->
                      <form>
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
                        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
                        <a class="underlineHover" href="{{route('utente')}}" title="Storico">Accedi</a>
                      </form>
                  
                      <!-- Iscrizione -->
                      <div id="formFooter">
                        <a class="underlineHover" href="{{route('registrazione')}}" title="Storico">Iscriviti</a>
                      </div>
                  
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
