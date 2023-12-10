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
      <div class="login d-flex align-items-center py-5">
       <!-- Contenido -->
       <div class="container">
          <div class="row">
            <div class="col-lg-10 col-xl-7 mx-auto">
              <h3 class="display-4">Iniciar sesion</h3>
              <p class="text-muted mb-4">Porfavor ingrese su DNI y contraseña</p>
              <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input id="inputEmail" type="text" placeholder="DNI" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4" name="dni">
                </div>
                <div class="form-group mb-4">
                    <input id="inputPassword" type="password" placeholder="Contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary" name="password">
                </div>
                <input type="submit" class="btn auth btn-block text-uppercase mb-2 rounded-pill shadow-sm" value="Iniciar Sesión">
                <div class="text-center d-flex justify-content-between mt-4"><p>¿No tiene una cuenta? <a href=" {{ route('reg') }}" class="font-italic text-muted"> 
                        <u>Registrate</u></a></p></div>
              </form>
            </div>
          </div>
       </div><!-- End -->
      </div>
    </div><!-- End -->
  </div>
</div>
@endsection