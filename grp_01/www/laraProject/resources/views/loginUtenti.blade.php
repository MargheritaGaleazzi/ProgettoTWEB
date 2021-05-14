@extends('layout.zonaPubblica')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="row">
        <div class=" col-md-6 offset-md-3">
            <div class="address">
                <div class="wrapper fadeInDown">
                    <div id="formContent">
                      <!-- Tab Title -->
                      <h2 class="active"> Accedi </h2>
    
                      <!-- Login Form -->
                      <form>
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
                        <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
                        <!--<button type="submit" class="fadeIn fourth" value="Accedi">Accedi</button>-->
                        <a href="{{route('utente')}}" title="Storico">Iscriviti</a>
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
