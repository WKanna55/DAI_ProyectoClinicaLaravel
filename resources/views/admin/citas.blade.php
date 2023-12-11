@extends('layouts.plantilla')
@section('content')

<main>
  <div class="container mt-5">
      <h2>Registro de Citas</h2>

      <!-- Formulario -->
      <form action="" method="POST">
          @csrf

          <!-- Seleccionar Especialidad -->
          <div class="form-group">
              <label for="especialidad">Seleccionar Especialidad:</label>
              <select class="form-control" id="especialidad" name="especialidad">
                  <!-- Aquí puedes iterar sobre tus especialidades desde la base de datos -->
                  <option value="1">Especialidad 1</option>
                  <option value="2">Especialidad 2</option>
                  <!-- ... -->
              </select>
          </div>

          <!-- Seleccionar Médico -->
          <div class="form-group">
              <label for="medico">Seleccionar Médico:</label>
              <select class="form-control" id="medico" name="medico">
                  <!-- Aquí puedes iterar sobre tus médicos desde la base de datos -->
                  <option value="1">Dr. Médico 1</option>
                  <option value="2">Dr. Médico 2</option>
                  <!-- ... -->
              </select>
          </div>

          <!-- Seleccionar Fecha -->
          <div class="form-group">
              <label for="fecha">Seleccionar Fecha:</label>
              <input type="date" class="form-control" id="fecha" name="fecha">
          </div>

          <!-- Seleccionar Hora -->
          <div class="form-group">
              <label for="hora">Seleccionar Hora:</label>
              <input type="time" class="form-control" id="hora" name="hora">
          </div>

          <!-- Botón de Enviar -->
          <button type="submit" class="btn btn-primary">Registrar Cita</button>
      </form>
  </div>
  </main>

@endsection