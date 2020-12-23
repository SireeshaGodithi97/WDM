@extends('layouts.default')

{{-- page title --}}
@section('title','semblanza')

{{-- page content --}}
@section('content')
   
<div class="container-fluid">

    <div class="row space pd-top-20  video">
        <div class="col-md-12 text-center col-sm-12 col-xs-12 video-title">
            <br><br>
          <h3>SOMOS UN EQUIPO INTERDISCIPLINARIO</h3>
        </div>
    </div>
    
    <div class="row space pd-top-20 video-content">
        
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <img src="{{asset('imageRepository/foto1.png')}}" />
                                <h5>ALEX RODRÍGUEZ D</h5>
                <p>Lic. en Administración, Magister en Turismo, Mención Mercadeo Turístico; Experiencia como docente universitario y promotor de emprendedores.
                                <br>Teléf.: 0416-5971407<br>
E-mail: arcaro0460@hotmail.com</p>
          </div>    
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <img src="{{asset('imageRepository/foto2.png')}}" >
                                <h5>GISELA QUINTERO B.</h5>
                <p>Psicólogo amplia experiencia en desarrollo organizacional, gestión y desarrollo de talento humano en instituciones públicas y empresas privadas.
                                <br>Teléf.: 0416-8969824<br>
E-mail: gigiqb@gmail.com</p>
          </div>    
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <img src="{{asset('imageRepository/foto3.png')}}" >
                                <h5>JUDITH P. ALVARADO J</h5>
                <p>Maestra, Actriz, Directora, Autora de Textos Teatrales, Maestra de Actuación, Teatrista.
                                <br>Teléf.: 0416-1949369<br>
E-mail: juditha.alvarado@gmail.com</p>
          </div>    
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <img src="{{asset('imageRepository/foto4.png')}}" >
                                <h5>MARÍA AUGUSTA BERROTERÁN</h5>
                <p>Lic. en Hotelería, Magister en Gerencia Ambiental, experiencia en hotelería, turismo y educación ambiental.
                                <br>Teléf.: 0416-4957513<br>
E-mail: mariaberroteranmaluenga@gmail.com</p>
          </div>    
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <img src="{{asset('imageRepository/foto5.png')}}" >
                                <h5>TAMARA MALAVER</h5>
                <p>Lic. en Relaciones Industriales, Magister en Gerencia de Empresas, Egresada del V Programa PNUD de Formación en Responsabilidad Social Empresarial; experiencia en desarrollo organizacional, gestión humana, docencia y promoción de proyectos comunitarias.
                                <br>Teléf.: 0426-5864477<br>
E-mail: tamaramalaver@gmail.com</p>
          </div>    
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="box-blue">
            <img src="{{asset('imageRepository/foto6.png')}}" >
                                <h5>TERESITA GONZÁLEZ</h5>
                <p>Lic. en Sociología, Magister en Educación, amplia experiencia en educación de nivel medio y universitaria, promotora de la estrategia pedagógica: Filosofía para Niños
                                <br>Teléf.: 0412-0960917<br>
E-mail: teresitadelacruz@gmail.com</p>
          </div>    
        </div>


  </div>
</div>

@endsection