@extends('layout.zonaPubblica')

@section('title', 'Home')
<!-- inizio della sezione home -->
@section('content')
<section class="banner_section">
        <div class="banner-main">
            <img src="images/banner2.jpg" />
            <div class="container">
                <div class="text-bg relative">
                    <h1>Bigliettone<br><br>Acquista da noi i tuoi biglietti</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Concerti -->
    <div id="screenshot" class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Eventi in evidenza</h2>
                        <p>Sezione degli eventi con copertina dell'evanto, a seguito di un click si apre la pagina dell'evento con i dettagli e la possibilità di acquisto</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                                <img src="images/album1.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                                <img src="images/album2.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Concerti -->
<!-- fine sezione home -->
@endsection
