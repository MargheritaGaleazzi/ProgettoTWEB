@extends('layout.zonaPubblica')

@section('title', 'Registrazione')

@section('content')
    <div class="container-contact">
        <div class="wrapper fadeInDown">
            <div id="formContent">

                <!-- Tab Title -->
                <h2 class="active"> Accedi </h2>

            {{ Form::open(array('route' => 'login', 'class' => 'contact-form')) }}

             <div  class="wrapper fadeInDown">

                {{ Form::label('username', 'Nome Utente', ['class' => 'fadeIn second']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrapper fadeInDown">
                {{ Form::label('password', 'Password', ['class' => 'fadeIn third']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div class="wrapper fadeInDown">                
                {{ Form::submit('Login', ['class' => 'fadeIn fourth']) }}
            </div>
            
            {{ Form::close() }}
        </div>
        </div>
    </div>

</div>
@endsection
