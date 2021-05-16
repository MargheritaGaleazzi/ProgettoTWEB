
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


@extends('layout.zonaPubblica')

@section('title', 'Dettaglio')

@section('content')
<div class="container">

    <div class="container emp-profile">
    <div class="row mt-4">

        <div class="col-lg-4 text-center border-right border-secondery">
            <div class="tab-content row h-100 d-flex justify-content-center" id="myTabContent">
                <div class="tab-pane fade show active col-lg-12" id="home" role="tabpanel" aria-labelledby="home-tab">
                    
                    
                        @include('Helper/LocandinaDettaglio', ['attrs' => 'imagefrm', 'imgFile' => $locandina])
                        {{ $informazioni }}
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <h3>
                {{ $titolo }}
            </h3>
            <h5>
                {{$prezzo}} €
            </h5>
            <p>
                Prezzo pieno se in sconto
            </p>
            <ul>
                <li class="pb-2"><b>Luogo:</b> {{$luogo}} </li>
                <li class="pb-2"><b>Data e ora:</b> {{$data_ora}} </li>
                <li class="pb-2"><b>Società organizzatrice:</b> {{$organizzatore}} </li>
            </ul>
             {!!$coordinate_maps!!}
        </div>
    </div>
        
        
        
    </div>
</div>

@endsection

