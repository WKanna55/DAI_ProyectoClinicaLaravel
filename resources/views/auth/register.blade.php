@extends('layouts.plantillaAuth')
@section('content')

<div class="container-fluid">
  <a href="{{ url('/')}}">
      
    <div class="container-izquierda">
      <div class="d-flex container-logo-login">
        <img src="assets/img/Recurso.svg" class="img-logo-login" alt="">
        <p class="texto-logo-login">Clínica Tecsana</p>
      </div>
      
    </div>
</a>
  <div class="row no-gutter">
    <!-- Mitad izquierda imagen -->
    <div class="col-md-6 d-none d-md-flex bg-login-image">
      
    </div>
    <!-- Mitad derecha login -->
    <div class="col-md-6 bg-light">
      <div class="contenedor-100hv">
        <form id="regForm" action="{{ route('register')}}" method="POST">
          @csrf
          <h3 class="display-4">Registro</h3>
          <p class="text-muted mb-4">Por favor ingrese los siguientes datos.</p>
          <div >
            <p><input class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="DNI" name="dni"></p>
          </div>
          
          <div class="mb-4">
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Nombres" name="nombres"></p>
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Apellidos" name="apellidos"></p>
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Telefono" name="telefono"></p>
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Direccion" name="direccion"></p>
            <p><input type="email" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Email" name="email"></p>
            <p><input type="text" id="fechaNacimiento" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Fecha de nacimiento" name="fecha"></p>
            <p><input type="password" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Contraseña" name="password"></p>
            <input type="hidden" value="1" name="rol">
          </div>
          
          
          <div style="overflow:auto;">
            <div style="float:right;">
              {{-- <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button> --}}
              <input class="btn auth btn-block text-uppercase mb-2 rounded-pill shadow-sm" type="submit" value="Enviar">
            </div>
          </div>
          <div class="text-center d-flex justify-content-between mt-4"><p>¿Ya tiene una cuenta? <a href="{{ route('loginShow')}}" class="font-italic text-muted"> 
            <u>Inicia sesión</u></a></p></div>
        </form>
      </div>
    </div>
    <!-- End mitades-->
  </div>
</div><!-- End section -->


<!-- script fecha de nacieminto-->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var inputDate = document.getElementById('fechaNacimiento');

    inputDate.addEventListener('focus', function() {
      inputDate.type = 'date';
    });

    inputDate.addEventListener('blur', function() {
      if (!inputDate.value) {
        inputDate.type = 'text';
        inputDate.placeholder = 'Fecha de Nacimiento';
      }
    });
  });
</script>

@endsection
