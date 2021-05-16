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
                        <input type="text" id="email" class="fadeIn second" name="login" placeholder="email" required>
                        <input type="password" id="password" class="fadeIn third" name="login" placeholder="password" required>
                        <input type="text" id="nome" class="fadeIn second" name="login" placeholder="nome" required>
                        <input type="text" id="cognome" class="fadeIn second" name="login" placeholder="cognome" required>
                        <input type="text" id="via" class="fadeIn second" name="login" placeholder="via" required>
                        <input type="text" id="città" class="fadeIn second" name="login" placeholder="città" required>
                        <input type="text" id="cap" class="fadeIn second" name="login" placeholder="CAP" required>

                        <label for="sesso">Sesso:</label>
                        <select name="sesso" id="sesso" class="fadeIn second" required>
                          <option value="femmina">Femmina</option>
                          <option value="maschio">Maschio</option>
                        </select>
                        
                        <input type="number" id="cellulare" class="fadeIn second" name="login" placeholder="cellulare"required>
                        <button type="submit" class="fadeIn fourth" value="Conferma">Conferma registrazione</button>
                      </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
