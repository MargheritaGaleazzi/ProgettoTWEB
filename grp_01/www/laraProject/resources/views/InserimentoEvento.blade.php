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
                            {{ Form::open(array('route' => ['inserisciEvento.inserisci', Auth::user()->id], 'id' => 'inseriscievento', 'files' => true, 'class' => 'contact-form')) }}
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
                    <!--Prezzo-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('prezzo', 'Prezzo', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('prezzo', '', ['class' => 'input','id' => 'prezzo']) }}
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
                    <!--Data-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('data', 'Data', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('data', '', ['class' => 'input','id' => 'data']) }}
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
                    <!--Ora-->
                    <div class="address">
                        <div class="form-group row">
                            {{ Form::label('ora', 'Ora', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                                {{ Form::text('ora', '', ['class' => 'input','id' => 'ora']) }}
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

