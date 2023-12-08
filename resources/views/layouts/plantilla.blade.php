<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="author" content="Grupo2 - 3er ciclo DAI">
    <meta name="description" content="Proyecto final DAI">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, Bootstrap, Vue, PHP, Laravel">
    <!-- Titulo -->
    <title>Clínica Serenidad </title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/icono.svg">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
    <!-- CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery y JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- iconos de Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'>

  </head>
  <body>
    <!-- Barra de navegacion -->
    <header>

      @guest
        <nav class="navbar principal navbar-expand-lg">
          <div class="container-fluid">

            <a class="navbar-brand" href="{{ url('/')}}">
              <div class="d-flex justify-content-center align-items-center navbrand-pers">
                <img src="assets/img/Recurso.svg" class="logo-brand" alt="">
                <p class="navbrand-text">Clínica Tecsana</p>
              </div>
            
            </a>
            <button class="navbar-toggler toggler-border-color principal" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <i class="bi bi-list icon-navbar"></i>
            </button>
            <div class="collapse navbar-collapse principal align-content-end" id="navbarTogglerDemo02">
              <!-- items del navbar-->
              <ul class="navbar-nav principal me-10 mb-2">
                <li class="nav-item principal">
                  <a class="nav-link principal" href="{{ route('nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item principal">
                  <a class="nav-link principal" href="{{ route('especialidades') }}">Especialidades</a>
                </li>
                <li class="nav-item principal">
                  <a role="button" class="btn lb btn-pers btn-lg" href="{{ route('loginShow') }}">Iniciar sesion</a>
                </li>
                <li class="nav-item principal">
                  <a role="button" class="btn lb btn-pers green btn-lg" href="{{ route('reg') }}">Registrate</a>
                </li> 

              </ul>
            </div>
          </div>
        </nav>

      @else

        @if(auth()->user()->role_id == 1)
          <nav class="navbar principal navbar-expand-lg">
            <div class="container-fluid">
            
              <a class="navbar-brand" href="{{ route('perfilPaciente')}}">
                <div class="d-flex justify-content-center align-items-center navbrand-pers">
                  <img src="assets/img/Recurso.svg" class="logo-brand" alt="">
                  <p class="navbrand-text">Clínica Tecsana</p>
                </div>
              
              </a>
              <button class="navbar-toggler toggler-border-color principal" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list icon-navbar"></i>
              </button>
              <div class="collapse navbar-collapse principal align-content-end" id="navbarTogglerDemo02">
                <!-- items del navbar-->
                <ul class="navbar-nav principal me-10 mb-2">
                  <li class="nav-item principal">
                    <a class="nav-link principal" href="{{ route('nosotros') }}">Nosotros</a>
                  </li>
                  <li class="nav-item principal">
                    <a class="nav-link principal" href="{{ route('especialidades') }}">Especialidades</a>
                  </li>
                  <li class="nav-item">
                    <a role="button" class="btn lb btn-pers green btn-lg" href="{{ route('perfilPaciente') }}">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a role="button" class="btn lb btn-pers btn-lg" href="{{ route('logout') }}">Cerrar sesión</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        @elseif(auth()->user()->role_id == 2 || auth()->user()->role_id == 3)
          <nav class="navbar principal navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('citas')}}">
                <div class="d-flex justify-content-center align-items-center navbrand-pers">
                  <img src="assets/img/Recurso.svg" class="logo-brand" alt="">
                  <p class="navbrand-text">Clínica Tecsana</p>
                </div>
              </a>
              <button class="navbar-toggler toggler-border-color principal" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list icon-navbar"></i>
              </button>
              <div class="collapse navbar-collapse principal align-content-end" id="navbarTogglerDemo02">
                <!-- items del navbar-->
                <ul class="navbar-nav principal me-10 mb-2">
                  
                  <li class="nav-item">
                    <a role="button" class="btn lb btn-pers btn-lg" href="{{ route('logout') }}">Cerrar sesión</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        @elseif(auth()->user()->role_id == 3)

          <nav class="navbar principal navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('adminShow')}}">
                <div class="d-flex justify-content-center align-items-center navbrand-pers">
                  <img src="assets/img/Recurso.svg" class="logo-brand" alt="">
                  <p class="navbrand-text">Clínica Tecsana</p>
                </div>
              </a>
              <button class="navbar-toggler toggler-border-color principal" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list icon-navbar"></i>
              </button>
              <div class="collapse navbar-collapse principal align-content-end" id="navbarTogglerDemo02">
                <!-- items del navbar-->
                <ul class="navbar-nav principal me-10 mb-2">

                  <li class="nav-item">
                    <a role="button" class="btn lb btn-pers btn-lg" href="{{ route('logout') }}">Cerrar sesión</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        @endif

      @endguest

    </header>


    @yield('content')

    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">

        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Presentamos con orgullo la clinica Tecsana, un referente destacado en servicios de salud 
            en la hermosa ciudad de Arequipa; desde el año 2005, nos dedicamos apasionadamente a atender 
            las necesidades de nuestra comunidad.
          </p>
        </section>
        <!-- Section: Text -->
      
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row justify-content-center align-items-center">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Ubicanos en</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <p>José Luis Bustamante y Rivero <br> Arequipa - Peru</p>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Escribenos o llamanos:</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <p>(054) 511000 - 988766332</p>
                </li>
                
              </ul>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright Clínica Tecsana. Todos los derechos reservados.
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('/assets/js/scripts.js')}}"></script>
  </body>
</html>
