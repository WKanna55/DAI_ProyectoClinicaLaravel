@extends('layouts.plantilla')
@section('content')
    <main>
      <div class="container especialidad mt-4 align-items-center">
        <!-- Parte 1: Descripción y Reserva de Cita -->
        <div class="row align-items-center pe-5 ps-5 mt-4">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="assets/img/especialidades/Odontologia/odontologo.jpg"
              class="img-fluid-especialidad img-prin"
              alt="Imagen de la especialidad"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <div>
              <h2 class="titulo-azul">Odontología</h2>
              <p>
                Cuidamos tu salud y estética bucal para que tengas una sonrisa radiante.
              </p>
              <a class="btn btn-pers especialidades mt-2" href="{{route('reg')}}">Reservar Cita</a>
            </div>
          </div>
        </div>

        <!-- Parte 2: Procedimientos -->
        <div class="row mt-4 container-fluid me-3 ms-1">
          <div class="col-md-12 mt-5 mb-4">
            <h2 class="titulo-azul text-center mb-4">Procedimientos Odontológicos</h2>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/Odontologia/endodoncia.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 1"
            />
            <h4 class="titulo-azul mt-3">Endodoncia</h4>
            <p>
              Tratamos las enfermedades que afectan los huesos y encías que soportan tus dientes, asegurando la salud de tu boca.
            </p>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="assets/img/especialidades/Odontologia/periodoncia.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 2"
            />
            <h4 class="titulo-azul mt-3">Periodoncia</h4>
            <p>
              Procedimiento para extraer un diente de la encía.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/Odontologia/radiografia.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 3"
            />
            <h4 class="titulo-azul mt-3">Radiografías dentales</h4>
            <p>
              Utilizamos imágenes radiográficas para evaluar la salud interna de tus dientes y ofrecerte un diagnóstico preciso.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="assets/img/especialidades/Odontologia/implante_dental.png"
              class="card-img-top img-fluid-especialidad"
              alt="Procedimiento 4"
            />
            <h4 class="titulo-azul mt-3">Implantes dentales</h4>
            <p>
              Reemplazamos los dientes perdidos con piezas de titanio y dientes artificiales, brindándote una solución duradera.
            </p>
          </div>
        </div>
        <div class="row mt-4 container-fluid  ms-5">
          <div class="col-md-12 ">
            <h2 class="titulo-azul mb-4 mt-5 text-center">Staff Médico</h2>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="assets/img/Doctores/doctora4.webp"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dra. Ramirez</h5>
                <p class="card-text">Especialidad: Odontología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="assets/img/Doctores/doctora3.webp"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dra. Aguilar</h5>
                <p class="card-text">Especialidad: Odontología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card img-especialidad" style="width: 15rem">
              <img
                src="assets/img/Doctores/doctora1.webp"
                class="card-img-top img-fluid-especialidad"
                alt="..."
              />
              <div class="card-body">
                <h5 class="titulo-azul">Dra. Mar</h5>
                <p class="card-text">Especialidad: Odontología</p>
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