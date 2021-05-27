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
@extends('layout.zonaUtente3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="address">
                <div>Modifica Evento</div>

                <div class="address">
                    {{ Form::open(array('route' => ['ModificaEvento.applica', '2'], 'id' => 'inseriscievento', 'files' => true, 'class' => 'contact-form')) }}

                    <!--Modifica Titolo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('titolo', old('titolo'), ['class' => 'input', 'id' => 'titolo']) }}
                                @if ($errors->first('titolo'))
                                <ul class="errors">
                                    @foreach ($errors->get('titolo') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>


                    <!--Modifica Locandina-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('locandina', 'Locandina', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::file('locandina', ['class' => 'input', 'id' => 'locandina']) }}
                                @if ($errors->first('locandina'))
                                <ul class="errors">
                                    @foreach ($errors->get('locandina') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Modifica Prezzo -->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('prezzo', old('prezzo'), ['class' => 'input','id' => 'prezzo']) }}
                                @if ($errors->first('prezzo'))
                                <ul class="errors">
                                    @foreach ($errors->get('prezzo') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Password Utente Registrazione
                    <div class="address">
                    <div class="form-group row">
                        {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                        <div class="col-md-6">
                        {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                            @if ($errors->first('password'))
                                <ul class="errors">
                                @foreach ($errors->get('password') as $message)
                                <li>{{ $message }}</li>
                                @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                    </div>
                    
                    <!--Conferma Password Utente Registrazione
                    <div class="address">
                    <div class="form-group row">
                        {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                        <div class="col-md-6">
                        {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
                        </div>
                    </div>
                    </div>
                    
                    <!--Modifica Data-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('data', 'Data', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('data', old('data'), ['class' => 'input','id' => 'data']) }}
                                @if ($errors->first('data'))
                                <ul class="errors">
                                    @foreach ($errors->get('data') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Modifica Ora-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('ora', 'Ora', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('ora', old('Ora'), ['class' => 'input','id' => 'ora']) }}
                                @if ($errors->first('ora'))
                                <ul class="errors">
                                    @foreach ($errors->get('ora') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Modifica Programma Evento-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('programma evento', "Programma Evento", ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('programma evento', old('programma evento'), ['class' => 'input','id' => 'programma evento']) }}
                                @if ($errors->first('programma evento'))
                                <ul class="errors">
                                    @foreach ($errors->get('programma evento') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <!--Modifica Indicazioni-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('indicazioni', 'Indicazioni', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('indicazioni', old('indicazioni'), ['class' => 'input','id' => 'indicazioni']) }}
                                @if ($errors->first('indicazioni'))
                                <ul class="errors">
                                    @foreach ($errors->get('indicazioni') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!--Modifica Informazioni-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('informazioni', 'Informazioni', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::textarea('informazioni', '', ['class' => 'input', 'id' => 'informazioni', 'rows' => 3]) }}
                                @if ($errors->first('informazioni'))
                                <ul class="errors">
                                    @foreach ($errors->get('informazioni') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>














                    <div>
                        <div class="col-md-6 offset-md-3">
                            {{ Form::submit('Modifica', ['class' => 'form-btn1']) }}
                        </div>
                    </div>
                    {{ Form::close() }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


