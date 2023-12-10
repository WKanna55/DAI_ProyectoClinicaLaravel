@extends('layouts.plantilla')
@section('content')

<div class="container mt-5">
  <h1 class="text-center titulo-azul">Especialidades</h1>

  <div class="row mt-4 d-flex mb-4">
    <div class="col-md-6">
      <div class="efecto-div mb-4 d-flex flex-column">
        <div class="card-body">
          <h5 class="titulo-azul">Medicina General</h5>
          <p class="card-text"> 
            Brinda atención integral para diversas condiciones médicas, ofreciendo diagnóstico, tratamiento y prevención a pacientes de todas las edades, centrada en el bienestar general.
          </p>
          <a href="{{ route('medicina_general') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column">
        <div class="card-body">
          <h5 class="titulo-azul">Dermatología</h5>
          <p class="card-text">Enfocada en la salud de piel, cabello y uñas, ofrece diagnóstico y tratamiento de afecciones dermatológicas y estéticas, garantizando la salud y apariencia de la piel.</p>
          <a href="{{ route('dermatologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column">
        <div class="card-body">
          <h5 class="titulo-azul">Gastroenterología</h5>
          <p class="card-text">Especializada en el sistema digestivo, aborda trastornos gastrointestinales y enfermedades hepáticas, priorizando la salud y funcionamiento óptimo del sistema digestivo.</p>
          <a href="{{ route('gastroenterologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>

      <!-- Repite este bloque para las especialidades en la primera columna -->

    </div>

    <div class="col-md-6">
      <div class="efecto-div mb-4 d-flex flex-column">
        <div class="card-body">
          <h5 class="titulo-azul">Ginecología</h5>
          <p class="card-text">Especializada en la salud femenina, aborda aspectos reproductivos, salud sexual, embarazo y cuidado ginecológico preventivo, promoviendo el bienestar integral de la mujer.</p>
          <a href="{{ route('ginecologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column">
        <div class="card-body">
          <h5 class="titulo-azul">Odontología</h5>
          <p class="card-text">Proporciona cuidado oral completo, desde limpiezas hasta tratamientos restaurativos y estéticos, garantizando la salud bucal y la estética dental para un bienestar completo.</p>
          <a href="{{ route('odontologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column">
        <div class="card-body">
          <h5 class="titulo-azul">Oftalmología </h5>
          <p class="card-text">Se dedica al cuidado de la salud visual, diagnosticando y tratando condiciones oculares, realizando exámenes de la vista y ofreciendo corrección visual, asegurando una visión saludable y nítida.</p>
          <a href="{{ route('oftalmologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>

      <!-- Repite este bloque para las especialidades en la segunda columna -->

    </div>
  </div>

  <!-- Puedes seguir añadiendo más columnas según sea necesario -->

</div>


</body>
</html>
@endsection