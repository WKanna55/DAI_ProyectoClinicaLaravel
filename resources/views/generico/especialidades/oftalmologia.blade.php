@extends('layouts.plantilla')
@section('content')
    <main>
      <div class="container especialidad mt-4 align-items-center">
        <!-- Parte 1: Descripción y Reserva de Cita -->
        <div class="row align-items-center pe-5 ps-5 mt-4">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="assets/img/especialidades/optalmología/optalmologia.png"
              class="img-fluid-especialidad img-prin"
              alt="Imagen de la especialidad"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <div>
              <h2 class="titulo-azul">Oftalmología</h2>
              <p>
                Diagnosticamos y tratamos las lesiones, enfermedades de los ojos y tratamiento de enfermedades oculares más complejas. El objetivo principal es preservar y mejorar la salud visual de los pacientes.
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
            <h2 class="titulo-azul text-center mb-4">Procedimientos</h2>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/optalmología/miopia.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 1"
            />
            <h4 class="titulo-azul mt-3">Miopía</h4>
            <p>
              Si los objetos lejanos se ven borrosos pero los cercanos se ven bien, es posible que tengas miopía. 
            </p>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/optalmología/heipermetropia.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 2"
            />
            <h4 class="titulo-azul mt-3">Hipermetropía</h4>
            <p>
              Si los objetos cercanos se ven borrosos pero los lejanos se ven bien, es probable que sufras de hipermetropía. 
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/optalmología/astigmatismo.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 3"
            />
            <h4 class="titulo-azul mt-3">Astigmatismo</h4>
            <p>
              Si tu visión es borrosa debido a un defecto en la curvatura de la córnea, es probable que tengas astigmatismo. En nuestra clínica, contamos con tecnología de vanguardia para corregir este problema y mejorar tu visión.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/optalmología/cataratas.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 4"
            />
            <h4 class="titulo-azul mt-3">Cataratas</h4>
            <p>
              Si experimentas visión nublosa debido al oscurecimiento y opacidad del cristalino, es posible que sufras de cataratas. Permítenos guiarte en el camino hacia una visión más clara y brillante.
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