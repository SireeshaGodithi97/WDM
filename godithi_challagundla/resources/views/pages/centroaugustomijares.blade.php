@extends('layouts.default')

{{-- page title --}}
@section('title','semblanza')

{{-- page content --}}
@section('content')

<div class="container-fluid pd-tb-30">
  <div class="row  centro pd-lr-114" >
    <div class="col-md-6 col-sm-12 col-xs-12">
        <h3>MISIÓN</h3>
          <p>El CENTRO AUGUSTO MIJARES es una asociación civil sin fines de lucro que contribuye con el desarrollo humano, mediante la generación y difusión de información, la formación extraescolar, promoviendo educación de calidad, asistencia técnica para mejorar el desempeño de organizaciones y el impulso de iniciativas de responsabilidad social y voluntariado, con el propósito de lograr la formación de capital social y el desarrollo sustentable de la comunidad.<br> 
                    
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">
      <h3>VISIÓN</h3>
          <p>El CENTRO AUGUSTO MIJARES aspira ser reconocido, a nivel nacional, como una organización de excelencia, comprometida con el desarrollo sustentable de la comunidad.</p>
    </div>

  </div>

<br><br>
  <div class="row centro" >
    <div class="col-md-3"></div>
      <div class="col-md-6 col-sm-12 col-xs-12 text-center">
        
        <div class="vlrs">
        <div class="log-icn"></div>
        <a><img src="{{asset('imageRepository/logo.png')}}" width="100" height="70"></a>
        <h3>VALORES</h3>
        <p>Dentro de nuestro pensamiento estratégico, los Valores son el verdadero poder: nos ayudan a aclarar nuestra Misión como organización y como personas; purifican e inspiran nuestra Visión y nos impulsan en cada actividad del desempeño organizacional.
Inspirados en el pensamiento del Profesor Augusto Mijares, asumimos como nuestros los ideales de Justicia, el Bien, la Belleza y la Verdad; y los valores de RESPONSABILIDAD SOCIAL, SOLIDARIDAD, CONSTANCIA, CORRESPONSABILIDAD, LIBERTAD, Y FRATERNIDAD.</p>
      </div>

      </div>
    </div>

    <br>
  <div class="row centro" >
    
    <div class="col-md-4 text-center">
      <div class="rsftrd padbtm">
          <h5>RESPONSABILIDAD SOCIAL</h5>
          <p>Estimulamos una actitud madura, consciente y sensible a los problemas de nuestra sociedad, a la vez que adoptamos hábitos, formulamos estrategias y desarrollamos procesos que nos ayudan a minimizar los impactos negativos que podamos generar en el medio ambiente y en la sociedad.</p>
        </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="rsftrd padbtm">
         <h5>FRATERNIDAD</h5>
          <p>Promovemos la unión, tolerancia y respeto a las diferencias entre los miembros que conforman una sociedad, conviviendo y actuando unidos en pos del bien común, y compartiendo sus experiencias de vida.</p>
        </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="rsftrd padbtm">
          <h5>LIBERTAD</h5>
          <p>La asumimos como la capacidad de elegir responsablemente la dirección de nuestras vidas. Implica el conocer y diferenciar entre el bien y el mal y proceder de acuerdo a nuestra conciencia, creencias y aspiraciones.</p>
        </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="rsftrd padbtm">
          <h5>CORRESPONSABILIDAD</h5>
          <p>Participamos conjuntamente con empresas, instituciones, organizaciones e individuos para impulsar iniciativas en pro del desarrollo humano y del desarrollo sustentable de la comunidad.</p>
        </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="rsftrd padbtm">
           <h5>SOLIDARIDAD</h5>
          <p>Actuamos desinteresadamente y con plena de alegría en favor de otras personas, teniendo en cuenta la utilidad y la necesidad del aporte para estas personas.</p>
        </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="rsftrd padbtm">
          <h5>CONSTANCIA</h5>
          <p>Tenemos perseverancia y hacemos esfuerzo constante para alcanzar nuestros objetivos y metas. Comenzamos una y otra vez para corregir errores y superar obstáculos. Se asume lo dicho por Simón Bolívar en el Manifiesto de Cartagena: “(…) el valor, la habilidad y la constancia corrigen la mala fortuna” - Citado por Augusto Mijares en la obra El Libertador.</p>
        </div>
    </div>
      


  </div>

</div>

    
@endsection
