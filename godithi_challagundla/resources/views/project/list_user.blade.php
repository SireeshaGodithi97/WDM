@extends('layouts.default')


{{-- page content --}}
@section('content')


    <div class="container-fluid" style="min-height: 570px;">
        <div class="row">
            <div class="col-md-12  col-sm-8 col-xs-8 text-center"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">Project Registered User</h2> </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 col-xs-12">

                @include('layouts.message')

                <div class="card-body" >
                    <div class="table-responsive">
                        <table id="default-table" class="table table-striped table-bordered text-center text-nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl.No.</th>
                                <th>Reg. Date </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($user_list as $users=>$user)
                                <tr>
                                    <td><?= $i; $i++; ?></td>
                                    <td>{{  \Carbon\Carbon::parse($user->created_at)->format('d/m/Y') }}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->address}}</td>
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
