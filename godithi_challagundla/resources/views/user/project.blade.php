@extends('layouts.default')


{{-- page content --}}
@section('content')

<div class="container-fluid" style="min-height: 570px;">
    <div class="row">
        <div class="col-md-4 pd-top-20 text-center"> <img src="{{asset('imageRepository/logo.png')}}"> </div>
        <div class="col-md-5"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">CENTRO AUGUSTO MIJARES</h2> </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            @if(Session::has('success'))
                <div class="alert alert-success alert-outline alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-outline alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
            @endif

                <div class="card-body" style="min-height: 500px;">
                    <div class="table-responsive">
                        <table id="default-table" class="table table-striped table-bordered text-center text-nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl.No.</th>
                                <th>Date</th>
                                <th class="text-left">Project Name</th>
                                <th>Project Email</th>
                                <th>Venue</th>
                                <th class="text-left">Project Description</th>
                                <th class="text-left">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($project_list as $project_key=>$project)
                                <tr>
                                    <td><?= $i; $i++; ?></td>
                                    <td>{{$project->project_date}}</td>
                                    <td class="text-left">{{$project->project_name}}</td>
                                    <td>{{$project->project_mail}}</td>
                                    <td>{{$project->project_venue}}</td>
                                    <td class="text-left">{{$project->project_description}}</td>
                                    <td class="text-left">
                                        <a href="{{ url('project_dereg/'.$project->project_id) }}" onclick="confirm('Are you sure want to de-register?')">De-Register</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
</div>

@endsection
