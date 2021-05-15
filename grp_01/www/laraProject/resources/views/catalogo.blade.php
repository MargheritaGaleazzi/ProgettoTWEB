@extends('layout.zonaPubblica')

@section('title', 'Catalogo')

@section('content')


    <section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Enter Search">
                        </div>
                      <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <input type="month" class="form-control search-slt" placeholder="Enter Search">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt">
                                <option>Choose Rating</option>
<!--                               4 stars and up -->
                                <option>
                                  <a><p>&#9733; &#9733; &#9733; &#9733; &#x2606;</p></a href="#">
                                </option>
<!--                               3 stars and up -->
                                <option>
                                    <a><p>&#9733; &#9733; &#9733; &#x2606; &#x2606;</p></a href="#">
                                </option>
  <!--                               2 stars and up -->
                                <option>
                                    <a><p>&#9733; &#9733; &#x2606; &#x2606; &#x2606;</p></a href="#">
                                </option>
  <!--                               1 star and up -->
                                <option>
                                    <a><p>&#9733; &#x2606; &#x2606; &#x2606; &#x2606;</p></a href="#">
                                </option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
    
    <div class="container">
    @isset($eventi)
    @foreach ($eventi as $evento)
    
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                    <div class="image">
                        @include('Helper/Locandina', ['attrs' => 'imagefrm', 'imgFile' => $evento->locandina])
                    </div>
                </div>
                <div class="col-md-6 mt-1">
                    <p class="nomeprod">{{ $evento->titolo }}</p>
                    <div class="d-flex flex-row">
                        <div class="mt-1 mb-1 spec-1"><span>{{ $evento->data_ora }}</span><span class="dot"></span><span>{{ $evento->luogo }}</span><span class="dot"></span><span>{{ $evento->societa_organizzatrice }}<br></span></div>
                    </div>
                    <p class="text-justify text-truncate para mb-0">{{ $evento->informazioni }}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">{{ $evento->prezzo_biglietto }} €</h4><span class="strike-text"></span>
                    </div>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Dettagli</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Compra</button></div>
                </div>
            </div>
            
         </div>
    </div>
    @endforeach
    
    <!--Paginazione-->
    @include('pagination.paginator', ['paginator' => $eventi])

    @endisset()
</div>


@endsection

