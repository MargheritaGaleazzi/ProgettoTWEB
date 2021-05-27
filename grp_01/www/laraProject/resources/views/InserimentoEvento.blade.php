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

@section('title', 'Inserimento Evento')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="address">
                <div class="address">
                    <!--Inizio del Form-->
                    <div class="address">
                        <div class="form-group row">
                            <div class="wrapper fadeInDown">INSERISCI EVENTO</div>
                            {{ Form::open(array('route' => 'inserisci', 'id' => 'inseriscievento', 'files' => true, 'class' => 'contact-form')) }}
                        </div>
                    </div>
                    <!--Titolo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('titolo', 'Titolo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'titolo']) }}
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
                    <!--Locandina-->
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
                    <!--Societa Organizzatrice-->
                    <div class="address">
                        <div class="form-group row">
                            <?php $user=Auth::user() ?>
                            {{ Form::hidden('societa_organizzatrice', $user->nome_societa_organizzatrice) }}
                           
                        </div>
                    </div>
                    <!--Prezzo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::number('prezzo', '', ['class' => 'input','id' => 'prezzo']) }}
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
                    <!--Sconto-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('sconto', 'Sconto', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::number('sconto', '', ['class' => 'input','id' => 'sconto']) }}
                                @if ($errors->first('sconto'))
                                <ul class="errors">
                                    @foreach ($errors->get('sconto') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Data e Ora-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('data_ora', 'Data e Ora', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('data_ora', '', ['class' => 'input','id' => 'data_ora', 'placeholder' => 'aaaa:mm:gg hh:mm:ss']) }}
                                @if ($errors->first('data'))
                                <ul class="errors">
                                    @foreach ($errors->get('data_ora') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Totale Biglietti Evento-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('tot biglietti', 'Totale biglietti evento', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::number('tot biglietti', '', ['class' => 'input','id' => 'tot biglietti']) }}
                                @if ($errors->first('tot biglietti'))
                                <ul class="errors">
                                    @foreach ($errors->get('tot biglietti') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <!--coordinate maps-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('coordinate maps', 'Coordinate Maps', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::textarea('coordinate maps', '', ['class' => 'input','id' => 'coordinate maps']) }}
                                @if ($errors->first('coordinate maps'))
                                <ul class="errors">
                                    @foreach ($errors->get('coordinate maps') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Luogo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('luogo', 'Luogo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('luogo', '', ['class' => 'input', 'id' => 'luogo']) }}
                                @if ($errors->first('luogo'))
                                <ul class="errors">
                                    @foreach ($errors->get('luogo') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--Programma Evento-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('programma evento', 'Programma Evento', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::textarea('programma evento', '', ['class' => 'input', 'id' => 'programma evento', 'rows' => 3]) }}
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
                    <!--Indicazioni-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('indicazioni', 'Indicazioni', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::textarea('indicazioni', '', ['class' => 'input', 'id' => 'indicazioni', 'rows' => 3]) }}
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
                    <!--Informazioni-->
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
                        <div class="col-md-6 offset-md-3">
                            {{ Form::submit('Aggiungi Evento', ['class' => 'form-btn1']) }}
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

