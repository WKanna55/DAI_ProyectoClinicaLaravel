@extends('layouts.plantilla')
@section('content')
    <main>
      <div class="container especialidad mt-4 align-items-center">
        <!-- Parte 1: Descripción y Reserva de Cita -->
        <div class="row align-items-center pe-5 ps-5 mt-4">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="assets/img/especialidades/gastroenterología/Gastroenterologia.jpg"
              class="img-fluid-especialidad img-prin"
              alt="Imagen de la especialidad"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <div>
              <h2 class="titulo-azul">Gastroenterología</h2>
              <p>
                Atendemos y tratamos los problemas de tu aparato digestivo (estómago, intestinos, etc)
              </p>
              <a class="btn btn-pers especialidades mt-2" href="{{route('reg')}}">Reservar Cita</a>
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
              src="assets/img/especialidades/gastroenterología/endoscopia.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 1"
            />
            <h4 class="titulo-azul mt-3">Endoscopía</h4>
            <p>
              Es un procedimiento que permite que el médico vea el interior de su cuerpo. Utiliza un instrumento llamado endoscopio o tubo visor.
            </p>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/gastroenterología/colonoscopia.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 2"
            />
            <h4 class="titulo-azul mt-3">Colonoscopia</h4>
            <p>
              Es un procedimiento que usa un médico para observar el interior del colon y del recto con un colonoscopio.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/gastroenterología/ecografia.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 3"
            />
            <h4 class="titulo-azul mt-3">Ecografía abdominal</h4>
            <p>
              Utiliza ondas sonoras para crear imágenes del abdomen, permitiendo evaluar el hígado, la vesícula biliar, los riñones y otras estructuras.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/gastroenterología/manometria.jpg"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 4"
            />
            <h4 class="titulo-azul mt-3">Manometria Esofágica</h4>
            <p>
              Mide la presión en el esófago para evaluar problemas como la acalasia o el reflujo gastroesofágico.
            </p>
          </div>
        </div>
        <div class="row mt-4 container-fluid ms-5">
          <div class="col-md-12 ">
            <h2 class="titulo-azul mb-4 mt-5 text-center">Staff Médico</h2>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad " style="width: 15rem">
              <img
                src="assets/img/Doctores/doctor1.webp"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dr. Quintana</h5>
                <p class="card-text">Especialidad: Gastroenterología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="assets/img/Doctores/doctor2.webp"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dr. Arapa</h5>
                <p class="card-text">Especialidad: Gastroenterología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="assets/img/Doctores/doctor3.webp"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dr. Perez</h5>
                <p class="card-text">Especialidad: Gastroenterología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


  </body>
</html>
@endsection 