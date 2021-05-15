@extends('layout.zonaPubblica')

@section('title', 'Catalogo')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

    <div class="container emp-profile">
    <div class="row mt-4">

        <div class="col-lg-4 text-center border-right border-secondery">
            <div class="tab-content row h-100 d-flex justify-content-center align-items-center" id="myTabContent">
                <div class="tab-pane fade show active col-lg-12" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/ENktSOKU0AA9Y-6.jpg" />
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <h3>
                $titolo
            </h3>
            <h5>
                $prezzo_biglietto
            </h5>
            <p>
                Prezzo pieno se in sconto
            </p>
            <ul>
                <li class="pb-2"><b>Luogo:</b> Luogo del concerto </li>
                <li class="pb-2"><b>Data e ora:</b> Data e ora del concerto </li>
                <li class="pb-2"><b>Società organizzatrice:</b> Società organizzatrice del concerto </li>
            </ul>
        </div>
    </div>
    </div>
</div>

@endsection

