@extends('layout.zonaUtente2')

@section('title', 'User')
<!-- inizio della sezione home -->
@section('content')
<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h1>
                                        Kshiti Ghelani
                                    </h1>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <p class="nav-link active" id="home-tab" data-toggle="tab" href="{{ route('login') }}" title="login" role="tab" aria-controls="home" aria-selected="true">Le mie Info:</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Modifica Profilo"/></a>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nome</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Kshiti Ghelani</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cognome</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>kshitighelani@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>E-mail</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123 456 7890</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Via</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Città</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CAP</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sesso</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Cellulare</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Web Developer and Designer</p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>          
        </div>
@endsection
