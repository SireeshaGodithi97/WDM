@extends('layouts.default')


{{-- page content --}}
@section('content')

<div class="container-fluid" style="min-height: 570px;">
    <div class="row">
        <div class="col-md-6  col-sm-4 col-xs-4 pd-top-20 text-md-right text-sm-left text-xs-left"> <img src="{{asset('imageRepository/logo.png')}}"> </div>
        <div class="col-md-4  col-sm-8 col-xs-8"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">CENTRO AUGUSTO MIJARES</h2> </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-md-4 col-sm-12 col-xs-12">

            @include('layouts.message')
            <div class="register-section">
                <h1 class="registro-title">Administrador Registro</h1>
                <form action="{{ route('admin_user_save') }}" method="post">
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
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,10}" title="Must contain at least one number and one uppercase and lowercase letter, and 8-10 characters" required autocomplete="new-password">
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


                    {{--<div class="row mt-27">--}}
                        {{--<div class="col">--}}
                            {{--<input type="text" placeholder="Direction" class="fullwid form-control"  name="address"  value="<?php echo $address; ?>">--}}
                            {{--@error('address')--}}
                            {{--<span>{{$message}}</span>--}}
                            {{--@enderror--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <input type="submit" Value="Guardar" class="mt-27">

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
