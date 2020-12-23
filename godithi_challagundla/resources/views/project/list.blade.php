@extends('layouts.default')


{{-- page content --}}
@section('content')

<div class="container-fluid" style="min-height: 570px;">
    <div class="row">
        <div class="col-md-12  col-sm-8 col-xs-8 text-center"> <h2 style="font-size: 1.85em;font-weight: 300;margin: 48px 0px;">Projects</h2> </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            @include('layouts.message')

                <div class="card-body" style="min-height: 500px;">
                    <a href="{{route('project.create')}}" class="btn btn-info" style="float: right; margin:5px;">Add Project</a>
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
                                <th>Action</th>
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
                                    <td>

                                        <a href="{{route('project-reg-user', $project->project_id)}}">View User</a>
                                        | <a href="{{ route('project.edit', $project->project_id ) }}">Edit</a>
                                        | <a href="javascipt:void(0);" class="delete"  data-id="{{$project->project_id}}">Delete</a>
                                              
                                        </form>

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


<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').click(function(){

            var r = confirm("Are You Sure want to delete?");
            if (r == true) {

                var id =$(this).attr('data-id');

                $.ajax({
                    url:"{{route('project-delete')}}",
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
