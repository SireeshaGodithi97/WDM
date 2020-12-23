@extends('layouts.default')

{{-- page title --}}
@section('title','login')

{{-- page content --}}
@section('content')


    <div class="container-fluid pd-tb-30">
        <div class="row  mt-35">
            <div class="col-md-4 col-sm-12 col-xs-12 text-center"></div>
            <div class="col-md-4 col-sm-12 col-xs-12 text-center">
                @include('layouts.message')
                <div class="register-section">
                    <img src="{{asset('imageRepository/logo.png')}}" width="100" height="70"></a>

                    <h3>CENTRO AUGUSTO MIJARES</h3>
                    <h4>Iniciar Sesion</h4>

                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Nombre de Usuario o Correo" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña"  required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Recuérdame
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña
                                </a>
                            @endif

                        </div>
                        <div class="form-group">
                                <input type="submit" Value="Entrar" class="mt-15" style="background-color: #3C33FF" onclick="ValidateUser()">

                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>


@endsection
