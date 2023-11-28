@extends('layouts.plantillaAuth')
@section('content')

<div class="container-fluid">
  <a href=" {{ url('/')}}">
    <img src="assets/img/index/logo.png" class="logo sobreponer esquinaIzquierda" alt=""/>
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
          
          <div >
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Nombres" name="nombres"></p>
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Apellidos" name="apellidos"></p>
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Telefono" name="telefono"></p>
            <p><input type="text" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Direccion" name="direccion"></p>
            <p><input type="email" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Email" name="email"></p>
            <p><input type="date" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Fecha de nacimiento" name="fecha"></p>
            <p><input type="password" type="" class="form-control rounded-pill border-0 shadow-sm px-4" placeholder="Contraseña" name="password"></p>
            <input type="hidden" value="1" name="rol">
          </div>
          
          
          <div style="overflow:auto;">
            <div style="float:right;">
              {{-- <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button> --}}
              <input class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm" type="submit" value="Enviar">
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
@endsection
