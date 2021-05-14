@extends('layout.zonaPubblica')

@section('title', 'Registrazione')

@section('content')

<div class="container">
    <div class="row">
        <div class=" col-md-6 offset-md-3">
            <div class="address">
                <div class="wrapper fadeInDown">
                    <div id="formContent">

                      <!-- Tab Title -->
                      <h2 class="active"> Inserisci i tuoi dati </h2>
    
                      <!-- Form Dati -->
                      <form>
                        <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
                        <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
                        <button type="submit" class="fadeIn fourth" value="Conferma">Conferma registrazione</button>
                      </form>
                  
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
