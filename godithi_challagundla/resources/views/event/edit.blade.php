@extends('layouts.default')


{{-- page content --}}
@section('content')

    <div class="container" style="min-height: 570px;">
        <div class="row">
            <div class="col-md-12 text-center"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">Event Edit</h2> </div>
        </div>
        <div class="row offset-md-4 pd-top-20">
            <div class="col-md-6">
                @include('layouts.message')

                <form action="{{ route('event.update',['event'=>$event_details['event_id']]) }}" method="post" id="reused_form">
                    @csrf
                     @method('PUT')
                    
                    
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" name="event_name" placeholder="Event Name" value="{{ $event_details['event_name'] }}" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" name="event_venue" placeholder="Venue" value="{{ $event_details['event_venue'] }}" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="date" name="event_date" placeholder="Event Date" class="form-control" value="{{ $event_details['event_date'] }}" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" name="event_description" placeholder="Description" >{{ $event_details['event_description'] }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="email" class="form-control" name="event_mail" placeholder="E-mail" value="{{ $event_details['event_mail'] }}" required>
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
