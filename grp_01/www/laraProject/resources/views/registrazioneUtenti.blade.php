@extends('layout.zonaPubblica')

@section('title', 'Registrazione')

@section('content')

<div class="container">
    <div class="row">
        <div class=" col-md-6 offset-md-3">
            <div class="address">
                <form action="index.html" method="post">
  
                    <h1>Registrati</h1>
                    
                    <fieldset>
                      <legend>Inserisci le tue informazioni</legend>
                      <label for="name">Username:</label>
                      <input type="text" id="name" name="user_name">
                      
                      <label for="password">Password:</label>
                      <input type="password" id="password" name="user_password">
                    
                    <button type="submit">Conferma registrazione</button>
                  </form>
        </div>
    </div>
</div>
@endsection
