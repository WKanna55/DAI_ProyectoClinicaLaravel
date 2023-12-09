@extends('layouts.plantilla')
@section('content')
    <main>
      <div class="container especialidad mt-4 align-items-center ">
        <!-- Parte 1: Descripción y Reserva de Cita -->
        <div class="row align-items-center pe-5 ps-5 mt-4">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="assets/img/especialidades/cirugia/bg-login.jpg"
              class="img-fluid-especialidad img-prin"
              alt="Imagen de la especialidad"
              
            />
          </div>
          <div class="col-md-6 order-md-1 ">
            <div>
              <h2 class="titulo-azul">Medicina General</h2>
              <p>
                Los médicos generales realizan una variedad de procedimientos y servicios, aunque su enfoque principal está en la atención primaria y la gestión de una amplia gama de condiciones médicas. 
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
              src="assets/img/especialidades/cirugia/electrocardiograma.jpg"
              class="card-img-top img-fluid-fluid-especialidad"
              alt="Procedimiento 1"
            />
            <h4 class="titulo-azul mt-3">Electrocardiograma</h4>
            <p>
              Para evaluar la salud del corazón y detectar posibles problemas
              cardíacos.
            </p>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/cirugia/radiografia.webp"
              class="card-img-top img-fluid-fluid-especialidad"
              alt="Procedimiento 2"
            />
            <h4 class="titulo-azul mt-3">Radiografias</h4>
            <p>
              Ecografía abdominal o estudios de imágenes como la tomografía
              computarizada (TC) o resonancia magnética (RM) para obtener
              imágenes detalladas de los órganos internos.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/cirugia/p_resistencia.jpg"
              class="card-img-top img-fluid-fluid-especialidad"
              alt="Procedimiento 3"
            />
            <h4 class="titulo-azul mt-3">Prueba de resistencia</h4>
            <p>
              Evaluación física completa para identificar cualquier problema de
              salud existente o potencial. Esto puede incluir la medición de
              signos vitales, examen de los sistemas cardiovascular,
              respiratorio, gastrointestinal, entre otros.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/cirugia/pulmonar.webp"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 4"
            />
            <h4 class="titulo-azul mt-3">Examen Pulmonar</h4>
            <p>
              Estas pruebas pueden ser necesarias para evaluar la capacidad
              pulmonar y asegurarse de que el paciente pueda tolerar la
              anestesia y la cirugía.
            </p>
          </div>
        </div>
        <div class="row mt-4 container-fluid ms-5">
          <div class="col-md-12 ">
            <h2 class="titulo-azul mb-4 mt-5 text-center">Staff Médico</h2>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="assets/img/Doctores/doctor4.webp.jpg"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dr. Medina</h5>
                <p class="card-text">Especialidad: Medicina general</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="assets/img/Doctores/doctora4.webp"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dra. Manrrique</h5>
                <p class="card-text">Especialidad: Medicina general</p>
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
                <h5 class="titulo-azul">Dr. Torres</h5>
                <p class="card-text">Especialidad: Medicina general</p>
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