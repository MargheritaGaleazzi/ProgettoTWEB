@extends('layout.zonaPubblica')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="address">
                <div class="wrapper fadeInDown">REGISTRATI</div>

                <div class="address">
                    {{ Form::open(array('route' => 'register')) }}
                    
                        <!--Nome Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                                    @if ($errors->first('nome'))
                                        <ul class="errors">
                                        @foreach ($errors->get('nome') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                        </ul>
                                    @endif
                            </div>
                        </div>
                        </div>

                        <!--Cognome Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome']) }}
                                @if ($errors->first('cognome'))
                                        <ul class="errors">
                                        @foreach ($errors->get('conome') as $message)
                                        <li>{{ $message }}</li>
                                        @endforeach
                                        </ul>
                                    @endif
                            </div>
                        </div>
                        </div>
                        
                        <!--E-mail Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                                @if ($errors->first('email'))
                                    <ul class="errors">
                                    @foreach ($errors->get('email') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                        </div>
                        
                        <!--Username Utente Registrazione-->
                        <div class="address">
                        <div class="form-group row">
                            {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                            <div class="col-md-6">
                            {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                                @if ($errors->first('username'))
                                    <ul class="errors">
                                    @foreach ($errors->get('username') as $message)
                                    <li>{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                        </div>
                        
                        <!--Password Utente Registrazione-->
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

                        

                        
                    
                    
                    
                    
                    
                    
                    
                    
                    

                        <div class="wrapper fadeInDown">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="fadeIn fourth">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
