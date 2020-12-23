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

            @if(Session::has('success'))
                <div class="alert alert-success alert-outline alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>

            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table id="default-table" class="table table-bordered text-center text-nowrap">
                        <thead>
                        <tr>
                            <th>Section</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Events</td>
                                <td>
                                    <a href="{{ route('user_event') }}">View List</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Projects</td>
                                <td>
                                    <a href="{{ route('user_project') }}">View List</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
