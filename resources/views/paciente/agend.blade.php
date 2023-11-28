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
    <link rel="icon" type="image/x-icon" href="img/icono.svg">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- iconos bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <!-- Barra de navegacion -->
        <header>
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/index/logo.png" class="logo" alt="">
                    </a>
                    <button class="navbar-toggler toggler-border-color" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-list icon-navbar"></i>
                    </button>

                    <div class="collapse navbar-collapse align-content-end" id="navbarTogglerDemo02">
                        <!-- items del navbar-->
                        <ul class="navbar-nav me-10 mb-2">
                            <li class="nav-item">                                
                              <a class="nav-link" href="#">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Especialidades</a>
                            </li>
                            
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#125873" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                                </ul>
                            </div>                            
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
        <!-- Carrusel de imagenes -->   
            <section class="p-5 d-flex gap-5 justify-content-center">
                <div class="d-flex flex-column justify-content-between align-items-center gap-4 col-md-8">
                    <div class="d-flex flex-column justify-content-between align-items-center gap-4 col-md-6">
                        <h2 class="agenda_title mt-4">Agenda tu cita</h2>
                    <form action="" class="agenda_form d-flex gap-5 flex-column p-4">
            
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Especialidad</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Selecciona la especialidad...</option>
                                <option value="Medicina General">Medicina General</option>
                                <option value="Oftalmología">Oftalmología</option>
                                <option value="Odontología">Odontología</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="Urología">Urología</option>
                                <option value="Neurología">Neurología</option>
                                <option value="Neumología">Neumología</option>
                                <option value="Cardiología">Cardiología</option>
                                <option value="Gastroenterología">Gastroenterología</option>
                                <option value="Endocrinología">Endocrinología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Psicología">Psicología</option>
                            </select>
                        </div>

            
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Selecciona la fecha...</option>
                                <option value="Fecha 01">Fecha 01</option>
                                <option value="Fecha 02">Fecha 02</option>
                                <option value="Fecha 03">Fecha 03</option>
                                <option value="Fecha 04">Fecha 04</option>
                                <option value="Fecha 05">Fecha 05</option>
                                <option value="Fecha 06">Fecha 06</option>
                                <option value="Fecha 07">Fecha 07</option>
                            </select>
                        </div>
            
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Doctor</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Selecciona un doctor...</option>
                                <option value="Juan Pérez">Dr. Juan Pérez</option>
                                <option value="Ana Rodríguez">Dra. Ana Rodríguez</option>
                                <option value="Carlos Gutiérrez">Dr. Carlos Gutiérrez</option>
                                <option value="María Martínez">Dra. María Martínez</option>
                                <option value="Antonio López">Dr. Antonio López</option>
                                <option value="Laura González">Dra. Laura González</option>
                                <option value="Eduardo Sánchez">Dr. Eduardo Sánchez</option>
                                <option value="Patricia Ramírez">Dra. Patricia Ramírez</option>
                                <option value="Jorge Fernández">Dr. Jorge Fernández</option>
                                <option value="Carmen Ruiz">Dra. Carmen Ruiz</option>
                                <option value="Luis Gonzales">Dr. Luis Gonzales</option>
                                <option value="Beatriz Herrera">Dra. Beatriz Herrera</option>
                                <option value="Manuel Silva">Dr. Manuel Silva</option>
                                <option value="Isabel Torres">Dra. Isabel Torres</option>
                                <option value="Javier Vargas">Dr. Javier Vargas</option>
                            </select>
                        </div>

            
                        <div class="input-group">
                          <label class="input-group-text" for="inputGroupSelect01">Hora</label>
                          <select class="form-select" id="inputGroupSelect01">
                              <option selected>Selecciona la hora...</option>
                              <option value="Hora 01">Hora 01</option>
                              <option value="Hora 02">Hora 02</option>
                              <option value="Hora 03">Hora 03</option>
                              <option value="Hora 04">Hora 04</option>
                              <option value="Hora 05">Hora 05</option>
                              <option value="Hora 06">Hora 06</option>
                              <option value="Hora 07">Fecha 07</option>
                          </select>
                        </div>
                        
                              <!-- Input oculto para almacenar el valor seleccionado -->
                              <input type="hidden" id="especieInput">
                      </div>
            
                      <div class="d-flex gap-4 align-items-center">
                        <p class=" m-0">Total a pagar: </p> 
                        <h2 class="text-center  m-0">S/. 200</h2>
                      </div>
                                   
                      <div class="agenda_form-submit text-center m-4">
                          <input  class="btn btn-primary" type="submit" value="Agendar">
                      </div>
                        
            
                    </form>
                    </div>  
                    
                </div>                
            </section>

            
        </main>
    
    <!-- Footer -->
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