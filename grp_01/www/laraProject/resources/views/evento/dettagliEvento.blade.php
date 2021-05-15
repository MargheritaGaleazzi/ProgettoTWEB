@extends('layout.zonaPubblica')

@section('title', 'Catalogo')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

    <div class="row mt-4">

        <div class="col-lg-4 text-center border-right border-secondery">
            <div class="tab-content row h-100 d-flex justify-content-center align-items-center" id="myTabContent">
                <div class="tab-pane fade show active col-lg-12" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <img class="img-fluid" src="https://pbs.twimg.com/media/ENktSOKU0AA9Y-6.jpg" />
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <h5>
                Note 8 Pro (Gamma Green, 128 GB)  (6 GB RAM)
            </h5>
            <h3>
                ₹16,766
            </h3>
            <p>
                Available offers
            </p>
            <ul>
                <li class="pb-2"><b>Bank Offer</b> 5% Unlimited Cashback on  Bank Credit Card <b>T&C</b></li>
                <li><b>Bank Offer</b> 5% Instant Discount on EMI with Bank Credit and Debit Cards <b>T&C</b></li>
            </ul>
        </div>
    </div>
</div>

@endsection

