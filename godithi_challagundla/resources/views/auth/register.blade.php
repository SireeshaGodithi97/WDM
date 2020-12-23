@extends('layouts.default')

{{-- page title --}}
@section('title','registro')

{{-- page content --}}
@section('content')

    <div class="container-fluid pd-tb-30">
        <div class="row  mt-35">
            <div class="col-md-6 col-sm-12 col-xs-12">
                @include('layouts.message')
                <div class="register-section">
                    <h1 class="registro-title">Registro</h1>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-27">
                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,10}" title="Must contain at least one number and one uppercase and lowercase letter, and 8-10 characters" >
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeter Contraseña" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mt-27">
                            <div class="col">
                                <textarea class="form-control" name="address" placeholder="Direction" required></textarea>
                                @error('address')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <input type="submit" Value="Guardar" class="mt-27">

                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mtop-50">
                <div class="img-content-section">
                    <img src="{{ asset('imageRepository/logo.png') }}">
                    <h3>CENTRO <br>AUGSTO <br>MIJARES</h3>
                </div>
            </div>

        </div>
    </div>


@endsection
