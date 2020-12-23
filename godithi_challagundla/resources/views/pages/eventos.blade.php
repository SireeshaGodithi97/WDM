@extends('layouts.default')

{{-- page title --}}
@section('title','semblanza')

{{-- page content --}}
@section('content')

    <div class="container-fluid">
    <div class="row space pd-top-20 eventos">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <h3><strong>MAESTRÍA EN GERENCIA DEL TURISMO SOSTENIBLE</strong></h3>
                          <p>El Programa de Postrado Maestría en Gerencia del Turismo Sostenible es una oportunidad de formación y actualización profesional para el desarrollo del turismo en el Siglo XXI. El Programa está integrado por las siguientes unidades curriculares: Legislación Turística, Patrimonio Natural y Cultural, Mercadeo Turístico Sostenible, Promoción del Turismo Sostenible, Formulación y Evaluación de Proyectos de Turismo Sostenible, Comercialización y Venta de Productos Turísticos Sostenibles, Legislación ambiental, Educación Ambiental, Economía Ambiental, Planificación del Desarrollo Turístico Sostenible, Turismo Sostenible y participación comunitaria. Las líneas de investigación y generación de conocimiento de este programa son: Turismo y Medioambiente; Planificación del Desarrollo Turístico Sostenible; Patrimonio Cultural; Calidad y Certificación de la Sostenibilidad Turística; Gestión de los Recursos Humanos en Empresas Turísticas. Requisitos Académicos: Título Universitario de Pregrado Localidad: Isla de Margarita

                    <br><br>Los Interesados deben enviar sus datos a :
                    <br><br>Dr. Rafael Torrealba (ULAC) No. Teléf. 0414-4650138  .  Correo:
                    <br> raftor535@hotmail.com 
                    <br>Tamara Malaver (Centro Augusto Mijares) No. Télef. 0426-5864477.
                    <br>Correo: tamaramalaver@gmail.com;
                    <br>centroaugustomijares@gmail.com
                    <br><br>Programa de Postgrado aprobado por el Consejo Nacional de Universidades (CNU): Resolución 063, Publicada en Gaceta Oficial No.38.651 del 23 03 2007
                    <br><br>Se reciben preinscripciones hasta el  15/04/2016
                    <br><br>Saludos, gracias por difundir esta oferta académica y contribuir así con el desarrollo humano de nuestra gente.</p>
                    
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
           <img src="{{asset('imageRepository/evento.jpg')}}" style="padding-left: 15px;     max-width: 100%; padding-top: 15px;">
        </div>
    </div>
</div>


    @if($event_list)
        <div class="card-body">
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
                        <th class="text-left">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($event_list as $events=>$event)
                        <tr>
                            <td><?= $i; $i++; ?></td>
                            <td>{{$event->event_date}}</td>
                            <td class="text-left">{{$event->event_name}}</td>
                            <td>{{$event->event_mail}}</td>
                            <td>{{$event->event_venue}}</td>
                            <td class="text-left">{{$event->event_description}}</td>
                            <td class="text-left">
                                @if (Auth::check())
                                    <a href="{{ url('event_reg/'.$event->event_id) }}">Register</a>
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
