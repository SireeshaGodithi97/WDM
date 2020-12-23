@extends('layouts.default')


{{-- page content --}}
@section('content')

<div class="container" style="min-height: 570px;">
     <div class="row">
         <div class="col-md-12 text-center"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">Project Add</h2> </div>
     </div>
    <div class="row offset-md-4 pd-top-20">
        <div class="col-md-6">

            @include('layouts.message')

            <form action="{{ route('project.store') }}" method="post" id="reused_form">
                @csrf

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <input type="text" class="form-control" name="project_name" placeholder="Project Name" value="" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <input type="text" class="form-control" name="project_venue" placeholder="Venue" value="" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <input type="date" name="project_date" placeholder="Timings" class="form-control" value="" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <textarea class="form-control" name="project_description" placeholder="Description"  required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <input type="email" class="form-control" name="project_mail" placeholder="E-mail" value="" required>
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
