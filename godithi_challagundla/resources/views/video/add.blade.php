@extends('layouts.default')


{{-- page content --}}
@section('content')

 <div class="container"  style="min-height: 570px;">
        <div class="row pd-top-20">
            <div class="col-md-4 text-center">
                
                <img src="{{asset('imageRepository/logo.png')}}"/>
            </div>
            <div class="col-md-4 col-md-offset-4 text-center" id="form_container" style="margin-top: 50px;">
                
                <h2 style=" margin-bottom: 30px;    font-size: 1.7em;font-weight: 300;">CENTRO AUGUSTO MIJARES</h2>

                @include('layouts.message')

                <form action="{{ route('video.store') }}" method="post" id="reused_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" id="video_name" name="video_name" placeholder="Video Name" value="" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" name="video_description" placeholder="Video Description" required></textarea>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" name="video_url" placeholder="Add Video URL" value="" required>
                        </div>
                    </div>
                    
                   
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="submit" name="" value="submit">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>


@endsection
