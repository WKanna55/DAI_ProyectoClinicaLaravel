@extends('layouts.plantilla')
@section('content')
    <main>
      <div class="container especialidad mt-4 align-items-center">
        <!-- Parte 1: Descripción y Reserva de Cita -->
        <div class="row align-items-center pe-5 ps-5 mt-4">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="assets/img/especialidades/dermatología/dermatologia.jpg"
              class="img-fluid-especialidad img-prin"
              alt="Imagen de la especialidad"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <div>
              <h2 class="titulo-azul">Dermatología</h2>
              <p>
                Diagnosticamos y tratamos los problemas relacionados a la piel como rosácea, acné, vitíligo, 
                psoriasis, micosis, melasmas, alopecia, foliculitis, etc.
              </p>
              @guest
              <a class="btn btn-pers especialidades mt-2" href="{{route('login')}}">Reservar Cita</a>
              @else
              <a class="btn btn-pers especialidades mt-2" href="{{route('showEspecialidad')}}">Reservar Cita</a>
              @endguest
            </div>
          </div>
        </div>

        <!-- Parte 2: Procedimientos -->
        <div class="row mt-4 container-fluid me-3 ms-1">
          <div class="col-md-12 mt-5 mb-4">
            <h2 class="titulo-azul text-center mb-4">Procedimientos dermatológicos</h2>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/dermatología/p_sangre.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 1"
            />
            <h4 class="titulo-azul mt-3">Prueba de sangre</h4>
            <p>
              Algunas condiciones dermatológicas pueden requerir pruebas de laboratorio, como análisis de sangre para evaluar la presencia de enfermedades autoinmunes o trastornos sistémicos.
            </p>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/dermatología/dermatoscopia.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 2"
            />
            <h4 class="titulo-azul mt-3">Dermatoscopia</h4>
            <p>
              Utilización de un dermatoscopio, un instrumento que permite examinar la piel con mayor detalle, especialmente para evaluar lunares y lesiones pigmentadas.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/dermatología/biopsia.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 3"
            />
            <h4 class="titulo-azul mt-3">Biopsia Cutánea</h4>
            <p>
              Toma de una pequeña muestra de tejido de la piel para su análisis bajo un microscopio. Esto puede ayudar a confirmar el diagnóstico de condiciones cutáneas específicas.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/dermatología/examen_cutaneo.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 4"
            />
            <h4 class="titulo-azul mt-3">Examen Cutáneo</h4>
            <p>
              Inspección visual de la piel para observar cualquier cambio en la textura, color, tamaño o forma de las lesiones cutáneas.
            </p>
          </div>
        </div>
        <div class="row mt-4 container-fluid ms-5">
          <div class="col-md-12 ">
            <h2 class="titulo-azul mb-4 mt-5 text-center">Staff Médico</h2>
          </div>

          @foreach ($doctors as $doctor)
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="{{asset('assets/img/doctor/' . $doctor->img_source)}}"
                class="card-img-top img-fluid-especialidad"
                alt="imagen de doctor"
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dr. {{$doctor->nombres}} {{$doctor->apellidos}}</h5>
                <p class="card-text cmp">CMP: {{$doctor->CMP}}</p>
              </div>
            </div>
          </div>
          @endforeach
          

        </div>
      </div>
    </main>


  </body>
</html>
@endsection