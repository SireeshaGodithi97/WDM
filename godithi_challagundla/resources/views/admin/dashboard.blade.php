@extends('layouts.default')


{{-- page content --}}
@section('content')
<div class="container-fluid" style="min-height: 570px;">
    <div class="row">
        <div class="col-md-12  col-sm-8 col-xs-8 text-center"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">Admin Dashboard</h2> </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-md-3 col-sm-12 col-xs-12">
            <div class="card-body">
                <div class="table-responsive offset-md-4">
                    <table id="default-table" class="table table-bordered text-center text-nowrap">
                        <thead>
                        <tr>
                            <th>Section</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>User</td>
                                <td>
                                    <a href="{{ route('user_list') }}">View List</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Events</td>
                                <td>
                                    <a href="{{ route('event.index') }}">View List</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Projects</td>
                                <td>
                                    <a href="{{ route('project.index') }}">View List</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Videos</td>
                                <td>
                                    <a href="{{ route('video.index') }}">View List</a>
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
