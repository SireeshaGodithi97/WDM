@extends('layouts.default')

{{-- page title --}}
@section('title','semblanza')

{{-- page content --}}
@section('content')


<div class="container-fluid">

    <div class="row space pd-top-20">
        <div class="col-md-12 col-sm-12 col-xs-12 text-center proyect-1">
           <a><img src="{{asset('imageRepository/logo.png')}}" width="100" height="70"></a>
                      <br>
            <h4 class="pd-top-20">RESPONSABILIDAD SOCIAL UNIVERSITARIA​ Y DESARROLLO SUSTENTABLE ¿QUÉ Y PARA QUÉ?</h4> 
        </div>
    </div>
    
    <div class="row space pd-top-20">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('imageRepository/graduandos.jpg')}}" height="92%" width="95%" style="padding-top: 15px;">
                    
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <h3><strong>Por el Centro AuguSto Mijares: Mgtr. Tamara Malaver</strong></h3>
              <p>El Centro Agusto Mijares considera pertinente tratar el tema de la Responsabilidad Social- Desarrollo Humano Sustentable en el sistema educativo universitario, a partir de los aportes que la Organización de las Naciones Unidas (ONU) ha hecho sobre este asunto. En tal sentido, cree necesario centrar su acción teniendo en cuenta los Principios ONU Gestión Responsable de la Educación Universitaria en los cuales se expone lo siguiente:
                <br><strong>Propósito</strong>: Desarrollar en los estudiantes las capacidades para la sostenibilidad, agregar valor a las empresas y la sociedad en general y trabajar por un economía incluyente y sostenible.
                <br><strong>Valores</strong>: Incorporar en las actividades académicas y los programas, los valores de la responsabilidad social y el desarrollo sostenible.
                <br><strong>Métodos</strong>: Crear Proyectos Educativos, materiales, procesos y entornos que permitan experiencias de aprendizaje eficaz para el liderazgo responsable.</p>
        </div>
    </div>
    
    <div class="row space pd-top-20">
        <div class="col-md-6 col-sm-12 col-xs-12">
             <p><strong>Investigación</strong>: Realizar  investigación para comprender el impacto de las empresas y las organizaciones en la creación de sostenibilidad social y ambiental y valor económico.
            <br><strong>Asociación</strong>: Interactuar con los actores sociales para asumir los desafíos de la comunidad y sus organizaciones en materia de responsabilidad social y ambiental.
            <br><strong>Diálogo</strong>: Promover el diálogo y debate de todas las partes interesadas sobre cuestiones criticas relacionadas con sostenibilidad y responsabilidad social. Teniendo en cuenta estos principios, una posibilidad de implicar la responsabilidad social en la universidad es a través del Servicio Comunitario. El propósito es que esta actividad sea un punto de partida para la gestión y desarrollo de proyectos que vaya en mejora de la calidad de vida del ciudadano dentro de la universidad y en la sociedad donde este hace vida.Actualmente, el Centro Augusto Mijares tiene en marcha una Propuesta de Responsabilidad Social – Desarrollo Humano Sustentable en la Universidad de Oriente. La ejecución de este proyecto sería una oportunidad clave para llevar a la práctica el lema “Del pueblo venimos / hacia el pueblo vamos” que sirve de norte a esta Casa de Estudios Superiores.</p>
            <a style="padding: 10px 10px 10px 10px; background: #673AB7; color: #fff; border: 1px solid #673AB7; border-radius: 20px; text-decoration: none;" href="#">Leer Mas</a>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('imageRepository/UNO.jpg')}}" style="padding-left: 15px;">
        </div>
        
    </div>

</div>
    @if($project_list)
    <div class="card-body">
        <div class="table-responsive">
            <table id="default-table" class="table table-striped table-bordered text-center text-nowrap" style="width:100%">
                <thead>
                <tr>
                    <th>Sl.No.</th>
                    <th>Date</th>
                    <th class="text-left">Project Name</th>
                    <th>Email</th>
                    <th>Venue</th>
                    <th class="text-left">Description</th>
                    <th class="text-left">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                @foreach($project_list as $projects=>$project)
                    <tr>
                        <td><?= $i; $i++; ?></td>
                        <td>{{$project->project_date}}</td>
                        <td class="text-left">{{$project->project_name}}</td>
                        <td>{{$project->project_mail}}</td>
                        <td>{{$project->project_venue}}</td>
                        <td class="text-left">{{$project->project_description}}</td>
                        <td class="text-left">
                            @if (Auth::check())
                                <a href="{{ url('project_reg/'.$project->project_id) }}">Register</a>
                            @else
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif

@endsection