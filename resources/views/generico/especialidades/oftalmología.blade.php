<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Metadatos -->
    <meta charset="UTF-8" />
    <meta name="author" content="Grupo2 - 3er ciclo DAI" />
    <meta name="description" content="Proyecto final DAI" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="HTML, Bootstrap, Vue, PHP, Laravel" />
    <!-- Titulo -->
    <title>Clinica final</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/icono.svg" />
    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- iconos bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <!-- Estilos propios -->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <!-- Bootstrap CSS -->
    <link href="ruta/a/tu/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/index/logo.png" class="logo" alt="" />
          </a>
          <button
            class="navbar-toggler toggler-border-color"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="bi bi-list icon-navbar"></i>
          </button>
          <div
            class="collapse navbar-collapse align-content-end"
            id="navbarTogglerDemo02"
          >
            <!-- items del navbar-->
            <ul class="navbar-nav me-10 mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="especialidades.html">Especialidades</a>
              </li>
              <li class="nav-item">
                <a role="button" class="btn btn-pers btn-lg" href="login.html"
                  >Iniciar sesion</a
                >
              </li>
              <li class="nav-item">
                <a
                  role="button"
                  class="btn btn-pers green btn-lg"
                  href="register.html"
                  >Registrate</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container mt-4 align-items-center">
        <!-- Parte 1: Descripción y Reserva de Cita -->
        <div class="row align-items-center pe-5 ps-5 mt-4">
          <div class="col-md-6 order-md-2 text-center">
            <img
              src="img/especialidades/optalmología/optalmologia.png"
              class="img-fluid"
              alt="Imagen de la especialidad"
            />
          </div>
          <div class="col-md-6 order-md-1">
            <div>
              <h2 class="card-title">Oftalmología</h2>
              <p>
                Diagnosticamos y tratamos las lesiones, enfermedades de los ojos y tratamiento de enfermedades oculares más complejas. El objetivo principal es preservar y mejorar la salud visual de los pacientes.
              </p>
              <a class="btn btn-pers mt-2" href="agendar.html">Reservar Cita</a>
            </div>
          </div>
        </div>

        <!-- Parte 2: Procedimientos -->
        <div class="row mt-4 container-fluid me-3 ms-1">
          <div class="col-md-12 mt-5 mb-4">
            <h2 class="card-title text-center mb-4">Procedimientos</h2>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="img/especialidades/optalmología/miopia.png"
              class="card-img-top img-fluid"
              alt="Procedimiento 1"
            />
            <h4 class="card-title mt-3">Miopía</h4>
            <p>
              Si los objetos lejanos se ven borrosos pero los cercanos se ven bien, es posible que tengas miopía. 
            </p>
          </div>
          <div class="col-sm-6 mb-5">
            <img
              src="img/especialidades/optalmología/heipermetropia.png"
              class="card-img-top img-fluid"
              alt="Procedimiento 2"
            />
            <h4 class="card-title mt-3">Hipermetropía</h4>
            <p>
              Si los objetos cercanos se ven borrosos pero los lejanos se ven bien, es probable que sufras de hipermetropía. 
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="img/especialidades/optalmología/astigmatismo.png"
              class="card-img-top img-fluid"
              alt="Procedimiento 3"
            />
            <h4 class="card-title mt-3">Astigmatismo</h4>
            <p>
              Si tu visión es borrosa debido a un defecto en la curvatura de la córnea, es probable que tengas astigmatismo. En nuestra clínica, contamos con tecnología de vanguardia para corregir este problema y mejorar tu visión.
            </p>
          </div>
          <div class="col-sm-6 mt-3">
            <img
              src="img/especialidades/optalmología/cataratas.png"
              class="card-img-top img-fluid"
              alt="Procedimiento 4"
            />
            <h4 class="card-title mt-3">Cataratas</h4>
            <p>
              Si experimentas visión nublosa debido al oscurecimiento y opacidad del cristalino, es posible que sufras de cataratas. Permítenos guiarte en el camino hacia una visión más clara y brillante.
            </p>
          </div>
        </div>
        <div class="row mt-4 container-fluid ms-5">
          <div class="col-md-12 ">
            <h2 class="card-title mb-4 mt-5 text-center">Staff Médico</h2>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card" style="width: 15rem">
              <img
                src="img/Doctores/doctor1.webp"
                class="card-img-top img-fluid"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Dr. Quintana</h5>
                <p class="card-text">Especialidad: Oftalmología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card" style="width: 15rem">
              <img
                src="img/Doctores/doctora2.webp"
                class="card-img-top img-fluid"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Dra. Gutierrez</h5>
                <p class="card-text">Especialidad: Oftalmología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4 justify-content-center">
            <div class="card" style="width: 15rem">
              <img
                src="img/Doctores/doctor5.webp.jpg.png"
                class="card-img-top img-fluid"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Dr. Perez</h5>
                <p class="card-text">Especialidad: Oftalmología</p>
                <p class="card-text">CPM:XXXXXX</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-white text-center text-dark">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
            distinctio earum repellat quaerat voluptatibus placeat nam, commodi
            optio pariatur est quia magnam eum harum corrupti dicta, aliquam
            sequi voluptate quas.
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
                  <a href="#!" class="text-dark">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-dark">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-dark">Link 4</a>
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
      <div
        class="text-center p-3"
        style="background-color: rgba(7, 19, 231, 0.2)"
      >
        © 2023 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
          >MDBootstrap.com</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    
  </body>
</html>
