@extends('layouts.default')

{{-- page title --}}
@section('title','semblanza')

{{-- page content --}}
@section('content')
<div class="container-fluid">

    <div class="row space pd-top-20  video">
        <div class="col-md-12 text-center col-sm-12 col-xs-12 video-title">
           <a><img src="{{asset('imageRepository/logo.png')}}" align="center" width="100" height="70"></a>
          <h3>SOMOS UN EQUIPO INTERDISCIPLINARIO</h3>
        </div>
    </div>
    
    <div class="row space pd-top-20 video-content">
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <iframe width="100%" style="width: 100%;" height="250" src="https://www.youtube.com/embed/44E6zSpaDwE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h5>Dr. François Vallaeys</h5>
                <p>La Responsabilidad Social por François Vallaeys | Universidad Siglo 21<br>
URL: https://www.youtube.com/watch?v=44E6zSpaDwE</p>
          </div>    
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <iframe width="300"  style="width: 100%;" height="250" src="https://www.youtube.com/embed/do9dIcEIiwU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h5>Dr. François Vallaeys</h5>
                <p>Panorama de la RSO en América Latina (SIRSO 2014)III SIMPOSIO DE LA RESPONSABILIDAD SOCIAL DE LAS ORGANIZACIONES<br>
URL: https://www.youtube.com/watch?v=do9dIcEIiwU</p>
          </div>    
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <iframe width="300"  style="width: 100%;" height="250" src="https://www.youtube.com/embed/h4juTFzNYcs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h5>UNIVERSIDAD DEL PACÍFICO</h5>
                <p>CONFERENCIA: Responsabilidad Socialersitaria como modelo universitario para América Latina<br>
URL: https://www.youtube.com/watch?v=h4juTFzNYcs</p>
          </div>    
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <iframe   style="width: 100%;" height="250" src="https://www.youtube.com/embed/W7y83cZ_s7g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h5>Dr. François Vallaeys</h5>
                <p>Conferencia: CALIDAD EDUCATIVA Y RESPONSABILIDAD SOCIAL -Congreso Internacional de Calidad Educativa <br>
URL: https://www.youtube.com/watch?v=W7y83cZ_s7g</p>
          </div>    
        </div>


  </div>
</div>


<div class="container-fluid">

    <div class="row space pd-top-20  video">

<?php
if($video_list) {

    $num=0;
    foreach($video_list as $videos=>$video) {

        $num=$num+1;
        $video_id=$video->video_id;
        $embededlink=$video->video_url;
        $link=str_replace('watch?v=', 'embed/', $embededlink);

        $delete='DeleteVideo.php?id='.$video_id;
        $edit='EditVideo.php?ref='.$video_id;
        if($num%4==0){
            echo '';
        }

        echo '<div class="col-md-4 col-sm-12 col-xs-12"><div class="box-blue">
            <iframe width="300" height="250" src="'.$link.'" frameborder="0" allow ="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h5>'.$video->video_name.'</h5>
            <p>'.$video->video_description.'<br>
URL:'.$video->video_url.'
</p>
        </div></div>';

        if($num%4==0){
            echo '';

        }

    }
}

?>



                </div>


            </div>


@endsection