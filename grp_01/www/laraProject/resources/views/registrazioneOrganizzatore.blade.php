@extends('layout.zonaPubblica')

@section('scripts')

@parent
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/functions.js') }}" ></script>
<script>
$(function () {
    var actionUrl = "{{ route('aggiungi') }}";
    var formId = 'inserisciOrganizzatore';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#inserisciOrganizzatore").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="address">
                <div class="wrapper fadeInDown">AGGIUNGI ORGANIZZATORE</div>

                <div class="address">
                    {{ Form::open(array('route' => 'aggiungi', 'id' => 'inserisciOrganizzatore', 'files' => true, 'class' => 'contact-form')) }}
                        <!--Nome società Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('nome_societa_organizzatrice', 'Nome società', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('nome_societa_organizzatrice', '', ['class' => 'input', 'id' => 'nome_societa_organizzatrice']) }}

                            </div>
                        </div>
                        </div>
                        
                        <!--E-mail Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}

                            </div>
                        </div>
                        </div>
                        
                        <!--Username Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}

                            </div>
                        </div>
                        </div>
                        
                        <!--Password Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}

                            </div>
                        </div>
                        </div>
                        
                        <!--Conferma Password Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
                            </div>
                        </div>
                        </div>
                        
                        <!--Via Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('via', 'Via', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('via', '', ['class' => 'input','id' => 'via']) }}

                            </div>
                        </div>
                        </div>
                        
                        <!--Citta Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('citta', 'Citta', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('citta', '', ['class' => 'input','id' => 'citta']) }}
 
                            </div>
                        </div>
                        </div>
                        
                        <!--Cap Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('cap', 'CAP', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('cap', '', ['class' => 'input','id' => 'cap']) }}

                            </div>
                        </div>
                        </div>
                        
                        <!--Sesso Utente Registrazione-->
                        <?php $gen=['M'=>'M','F'=>'F']; ?>
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('sesso', 'Sesso', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::select('sesso',$gen ,'', ['class' => 'input','id' => 'sesso']) }}

                            </div>
                        </div>
                        </div>
                        
                        <!--Cellulare Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('cellulare', 'Cellulare', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('cellulare', '', ['class' => 'input','id' => 'cellulare']) }}

                            </div>
                        </div>
                        </div>
                        <div class="wrapper fadeInDown">
                            <div class="col-md-6 offset-md-3">
                                {{ Form::submit('Aggiungi', ['class' => 'form-btn1']) }}
                            </div>
                        </div>
                    {{ Form::close() }}
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




