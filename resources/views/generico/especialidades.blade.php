@extends('layouts.plantilla')
@section('content')

<div class="container mt-5">
  <h1 class="text-center titulo-azul">Especialidades</h1>

  <div class="row mt-4">
    <div class="col-md-6">
      <div class="efecto-div mb-4 d-flex flex-column" style="max-height: 100%;">
        <div class="card-body">
          <h5 class="titulo-azul">Medicina General</h5>
          <p class="card-text"> 
            La medicina general brinda atención médica integral a pacientes de todas las edades, abordando diagnóstico, tratamiento y prevención.
          </p>
          <a href="{{ route('medicina_general') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column" style="max-height: 100%;">
        <div class="card-body">
          <h5 class="titulo-azul">Dermatología</h5>
          <p class="card-text">Diagnóstico y tratamiento de condiciones dermatológicas, como acné, eczema y cáncer de piel.</p>
          <a href="{{ route('dermatologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column" style="max-height: 100%;">
        <div class="card-body">
          <h5 class="titulo-azul">Gastroenterología</h5>
          <p class="card-text">Diagnóstico y tratamiento de enfermedades gastrointestinales, como la enfermedad inflamatoria intestinal y la enfermedad del hígado.</p>
          <a href="{{ route('gastroenterologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>

      <!-- Repite este bloque para las especialidades en la primera columna -->

    </div>

    <div class="col-md-6">
      <div class="efecto-div mb-4 d-flex flex-column" style="max-height: 100%;">
        <div class="card-body">
          <h5 class="titulo-azul">Ginecología</h5>
          <p class="card-text">Manejo de la salud ginecológica, incluyendo embarazo, parto, y problemas del sistema reproductivo.</p>
          <a href="{{ route('ginecologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column" style="max-height: 100%;">
        <div class="card-body">
          <h5 class="titulo-azul">Odontología</h5>
          <p class="card-text">Trata problemas relacionados con la salud bucal y dental. Incluye limpiezas, obturaciones, extracciones y otros procedimientos dentales.</p>
          <a href="{{ route('odontologia') }}" class="btn btn-pers especialidades">Mostrar mas</a>
        </div>
      </div>
      <div class="efecto-div mb-4 d-flex flex-column" style="max-height: 100%;">
        <div class="card-body">
          <h5 class="titulo-azul">Oftalmología </h5>
          <p class="card-text">Diagnóstico y tratamiento de condiciones oculares, como cataratas, glaucoma y problemas de la retina.</p>
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