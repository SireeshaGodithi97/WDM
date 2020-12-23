@extends('layouts.default')


{{-- page content --}}
@section('content')

<div class="container-fluid" style="min-height: 570px;">
    <div class="row">
        <div class="col-md-12  col-sm-8 col-xs-8 text-center"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">Events</h2> </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            @include('layouts.message')

                <div class="card-body" >
                    <a href="{{route('event.create')}}" class="btn btn-info" style="float: right; margin:5px;">Add Event</a>
                    <div class="table-responsive">
                        <table id="default-table" class="table table-striped table-bordered text-center text-nowrap" style="width:100%">
                            <thead>
                            <tr>
                                <th>Sl.No.</th>
                                <th>Date</th>
                                <th class="text-left">Event Name</th>
                                <th>Email</th>
                                <th>Venue</th>
                                <th class="text-left">Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if($event_list)
            
                            <?php $i=1; ?>
                            @foreach($event_list as $events=>$event)
                                <tr>
                                    <td><?= $i; $i++; ?></td>
                                    <td>{{$event->event_date}}</td>
                                    <td class="text-left">{{$event->event_name}}</td>
                                    <td>{{$event->event_mail}}</td>
                                    <td>{{$event->event_venue}}</td>
                                    <td class="text-left">{{$event->event_description}}</td>
                                    <td>
                                        <a href="{{route('event-reg-user', $event->event_id)}}">View User</a>
                                        | <a href="{{ route('event.edit', $event->event_id ) }}">Edit</a>
                                        | <a href="javascipt:void(0);" class="delete"  data-id="{{$event->event_id}}">Delete</a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){

            var r = confirm("Are You Sure want to delete?");
            if (r == true) {

            var id =$(this).attr('data-id');

                $.ajax({
                    url:"{{route('event-delete')}}",
                    method:'GET',
                    data:{
                        id:id
                    },
                    success:function(html){
                        location.reload();
                    },
                    error:function(){

                    }
                });
            }

        });
    });
</script>
    

@endsection
