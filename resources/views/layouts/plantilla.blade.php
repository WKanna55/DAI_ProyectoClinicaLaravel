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
    <title>Clinica final</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/icono.svg">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
  </head>
  <body>
    <!-- Barra de navegacion -->
    <header>
      <nav class="navbar principal navbar-expand-md">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/')}}">
            <img src="assets/img/index/logo.png" class="logo" alt="">
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
                <a class="nav-link principal" href="{{ url('/especialidades') }}">Especialidades</a>
              </li>
              
              @guest
              <li class="nav-item principal">
                <a role="button" class="btn btn-pers btn-lg" href="{{ route('loginShow') }}">Iniciar sesion</a>
              </li>
              <li class="nav-item principal">
                <a role="button" class="btn btn-pers green btn-lg" href="{{ route('reg') }}">Registrate</a>
              </li> 
              
              @else
              <li class="nav-item">
                <a role="button" class="btn btn-pers btn-lg" href="{{ route('logout') }}">Cerrar sesión</a>
              </li>
              <li class="nav-item">
                <a role="button" class="btn btn-pers btn-lg" href="{{ route('adminShow') }}">ventana admin</a>
              </li>
              @endguest
              
            </ul>
          </div>
        </div>
      </nav>
    </header>


    @yield('content')

    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4">

        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
            repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
            eum harum corrupti dicta, aliquam sequi voluptate quas.
          </p>
        </section>
        <!-- Section: Text -->
      
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
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
        © 2023 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>