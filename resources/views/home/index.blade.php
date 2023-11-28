@extends ('layouts.plantilla')
@section ('content')

  <!-- Carrusel de imagenes -->
  <section>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="sobreponer-carr texto-sobrepuesto">
            <h2 class="">¡Descubre el Bienestar Total en Nuestra Clínica de Excelencia!</h2>
            <p>Bienvenido a [Nombre de la Clínica], donde tu salud y bienestar son nuestra prioridad. Nuestro equipo de profesionales altamente calificados está comprometido a brindarte atención personalizada y de calidad.
            </p>
          </div>
          <img src="assets/img/index/carrusel/carr1.jpeg" class="d-block w-100 img-carr" alt="img1">
        </div>
        <div class="carousel-item">
          <div class="sobreponer-carr texto-sobrepuesto">
            <h2>¡No te pierdas la promocion!</h2>
            <img src="assets/img/index/promocion.png" class="img-z-carr" alt="">
          </div>
          <img src="assets/img/index/carrusel/carr2.jpg" class="d-block w-100 img-carr" alt="img2">
        </div>
        <div class="carousel-item">
          <img src="assets/img/index/carrusel/carr3.jpg" class="d-block w-100 img-carr" alt="img3">
        </div>
      </div>
      <div class="sobreponer d-flex">
        <a role="button" class="btn btn-pers cita m-2" href="{{route('reg')}}">Agendar cita</a>
        <a role="button" class="btn btn-pers green video m-2" href="#">Como agendar</a>
      </div>
    </div>
  </section>
  <!-- Especialidades -->
  <section class="bg-seccion">
    <div class="container-fluid" style="height: 50px;">
    </div>
    <div class="container align-items-center">
      <h1 class="text-center mb-3">Nuestras especilidades</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 row-cols-xxl-6">
        <div class="col mb-4">
          <a href="#">
            <div class="card especialidades align-items-center">
              <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
              <div class="card-body">
                <h5 class="card-title">Cardiología</h5>
              </div>
            </div>
          </a>
            
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card especialidades align-items-center">
            <img src="assets/img/index/especialidades_icon/heart-pulse.svg" class="card-img-top icon-especializacion" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cardiología</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid" style="height: 50px;"></div>
    </div>
  </section>
  <!-- Comentarios -->
  <section>
    <div class="container-fluid align-items-center parallax">
      <div class="container-fluid" style="height: 50px;"></div>
      <div class="container">
        <h1 class="text-center mb-5 text-light">Comentarios de nuestros pacientes</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div class="col mb-4">
          <div class="card align-items-center bg-user">
            <img src="assets/img/index/user.svg" class="card-img-top user-icon" alt="...">
            <h5>Carlos Nuñez</h5>
            <div class="card-body bg-light">
              <p class="card-text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit labore omnis eligendi dolorem aut rerum velit sit architecto impedit minima distinctio, atque est fugit, ex numquam, deserunt laboriosam maiores consequuntur!
                "</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card align-items-center bg-user">
            <img src="assets/img/index/user.svg" class="card-img-top user-icon" alt="...">
            <h5>Carlos Nuñez</h5>
            <div class="card-body bg-light">
              <p class="card-text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit labore omnis eligendi dolorem aut rerum velit sit architecto impedit minima distinctio, atque est fugit, ex numquam, deserunt laboriosam maiores consequuntur!
                "</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card align-items-center bg-user">
            <img src="assets/img/index/user.svg" class="card-img-top user-icon" alt="...">
            <h5>Carlos Nuñez</h5>
            <div class="card-body bg-light">
              <p class="card-text">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit labore omnis eligendi dolorem aut rerum velit sit architecto impedit minima distinctio, atque est fugit, ex numquam, deserunt laboriosam maiores consequuntur!
                "</p>
            </div>
          </div>
        </div>
        <div class="container-fluid" style="height: 50px;"></div>
      </div>
    </div>
  </section>

@endsection