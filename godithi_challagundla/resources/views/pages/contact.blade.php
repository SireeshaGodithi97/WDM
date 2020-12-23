@extends('layouts.default')

{{-- page content --}}
@section('content')
    <div class="container">
        <div class="row pd-top-20">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-md-offset-3" id="form_container">
                <h2 style="    font-size: 1.85em;font-weight: 300;">Contacta con nosotras</h2>
                <p class="pd-top-20" style="    color: grey;"> Por favor envíe su mensaje a continuación. ¡Nos pondremos en contacto con usted lo antes posible! </p>

                @if(Session::has('success'))
                 <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>{{ Session::get('success') }}</strong>
                  </div>

                @endif
                
                @error('message')
                    <span style="color: red;">Mensaje Filed is Required</span><br>
                @enderror
                @error('name')
                    <span style="color: red;">Tu nombre Filed is Required</span><br>
                @enderror
                @error('mail')
                    <span style="color: red;">Correo electrónico Filed is Required</span><br>
                @enderror

                <form action="{{ route('contact.store') }}" method="post" id="reused_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="message"> Mensaje:</label>
                            <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7" required=""></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name"> Tu nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user_details ? $user_details['name'] : ' '  }}" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email"> Correo electrónico:</label>
                            <input type="email" class="form-control" id="mail" name="mail" value="{{ $user_details ? $user_details['email'] : ' '  }}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="submit" name="" value="enviar &rarr;">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
@endsection