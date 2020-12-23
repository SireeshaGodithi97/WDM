@extends('layouts.default')


{{-- page content --}}
@section('content')

<div class="container-fluid">


    <div class="row space pd-top-20  video">
        <div class="col-md-12 text-center col-sm-12 col-xs-12 video-title">
            <a><img src="{{asset('imageRepository/logo.png')}}" align="center" width="100" height="70"></a>
            <h3>SOMOS UN EQUIPO INTERDISCIPLINARIO</h3>
            
            @include('layouts.message')
        </div>
    </div>

    <div class="row space pd-top-20  video">

<?php
if($video_list) {

    $num=0;
    foreach($video_list as $videos=>$video) {

        $num=$num+1;
        $video_id=$video->video_id;
        $embededlink=$video->video_url;
        $link=str_replace('watch?v=', 'embed/', $embededlink);

        if($num%4==0){
            echo '';
        }

        echo '<div class="col-md-4 col-sm-12 col-xs-12"><div class="box-blue">
            <iframe width="300" height="250" src="'.$link.'" frameborder="0" allow ="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h5>'.$video->video_name.'</h5>
            <p>'.$video->video_description.'<br>
URL:'.$video->video_url.'
</p>';
?>
<a href="{{route('video.edit',['video'=>$video_id])}}" style="color: grey;text-decoration: underline;">Edit</a><br>
<a href="javascript:void(0);" onclick="submitdelete(<?php echo $video_id ?>)" style="color: grey;text-decoration: underline;">Delete</a>



<?php
echo'</div></div>';

        if($num%4==0){
            echo '';

        }

    }
}

?>


    </div>
</div>
<script type="text/javascript">
    function submitdelete(id){
        var r = confirm("Are You Sure want to delete?");
            if (r == true) {
                document.getElementById(id).submit();
            }
        
    }
</script>

@endsection
