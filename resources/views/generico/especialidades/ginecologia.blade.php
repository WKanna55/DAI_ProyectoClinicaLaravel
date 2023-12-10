@extends('layouts.plantilla')
@section('content')
    <main>
      <div class="container especialidad mt-4 align-items-center">
        <!-- Parte 1: Descripción y Reserva de Cita -->
        <div class="row align-items-center  pe-5 ps-5 mt-4">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="assets/img/especialidades/ginecologia/ginecologia.jpg"
              class="img-fluid-especialidad img-prin"
              alt="Imagen de la especialidad"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <div>
              <h2 class="titulo-azul">Ginecología</h2>
              <p>
                Diagnosticamos, tratamos y hacemos prevención y control del aparato reproductor de la mujer.
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
            <h2 class="titulo-azul text-center mb-4">Procedimientos ginecológicos</h2>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/ginecologia/papanicolaou.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 1"
            />
            <h4 class="titulo-azul mt-3">Papanicolaou</h4>
            <p>
              Prueba preventiva para detectar cambios prematuros en las células del cuello uterino el cual pueden derivar en cáncer.
            </p>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/ginecologia/ecografia.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 2"
            />
            <h4 class="titulo-azul mt-3">Ecografía transvaginal</h4>
            <p>
              Estudio mediante ultrasonidos con el que se obtienen imágenes que nos permiten estudiar el útero, los ovarios, las trompas de Falopio, el cuello uterino y el área pélvica de la mujer
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/ginecologia/colposcopía.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 3"
            />
            <h4 class="titulo-azul mt-3">Colposcopía</h4>
            <p>
              Procedimiento para examinar detenidamente el cuello del útero, la vagina y la vulva en busca de signos de enfermedades como el cáncer, infecciones por VPH, verrugas genitales, etc.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/ginecologia/mamografia.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 4"
            />
            <h4 class="titulo-azul mt-3">Mamografía</h4>
            <p>
              Prueba de imagen de Rayos X de las mamas para la detección temprana de cáncer de mama.
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