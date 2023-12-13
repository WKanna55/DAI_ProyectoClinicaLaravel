@extends ('layouts.plantilla')
@section ('content')

  <!-- Carrusel de imagenes -->
  <section>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="sobreponer-carr texto-sobrepuesto">
            <h2 class="">¡Descubre el Bienestar Total en Nuestra Clínica de Excelencia!</h2>
            <p>Bienvenido a Clinica Tecsana, donde tu salud y bienestar son nuestra prioridad. 
              Nuestro equipo de profesionales altamente calificados está comprometido a brindarte 
              atención personalizada y de calidad.
            </p>
          </div>
          <img src="{{asset('assets/img/index/carrusel/carr1.jpeg')}}" class="d-block w-100 img-carr" alt="img1">
        </div>
        <div class="carousel-item">
          <div class="sobreponer-carr texto-sobrepuesto">
            <h2>¡No te pierdas promociones!</h2>
            <img src="{{asset('assets/img/index/promocion.jpg')}}" class="img-z-carr" alt="">
          </div>
          <img src="{{asset('assets/img/index/carrusel/carr2.jpg')}}" class="d-block w-100 img-carr" alt="img2">
        </div>
        <div class="carousel-item">
          <img src="{{asset('assets/img/index/carrusel/carr3.jpg')}}" class="d-block w-100 img-carr" alt="img3">
        </div>
      </div>
      <div class="sobreponer d-flex">
        @guest    
        <a role="button" class="btn btn-pers cita m-2" href="{{ route('login') }}">Agendar cita</a>
        @else
        <a role="button" class="btn btn-pers cita m-2" href="{{ route('showEspecialidad') }}">Agendar cita</a>
        @endguest
      </div>
    </div>
  </section>
  
  <!-- Especialidades -->
  <section class="">
      <div class="container-fluid" style="height: 50px;">
      </div>
      <div class="container mt-5">
        <h1 class="text-center mb-4">Nuestras Especialidades</h1>
    
        <div class="row">
            <!-- Especialidad 1 -->
            <div class="col-md-6">
                <a href="{{ route('medicina_general')}}" class="d-flex align-items-center text-dark text-decoration-none rounded p-3 specialty-card">
                    <img src="assets/img/iconos/cirgen-icon.png" alt="Icono de Cirugía General" class="mr-3" width="60">
                    <span class="h5">Medicina General</span>
                </a>
            </div>
    
            <!-- Especialidad 2 -->
            <div class="col-md-6">
                <a href="{{ route('dermatologia')}}" class="d-flex align-items-center text-dark text-decoration-none rounded p-3 specialty-card">
                    <img src="assets/img/iconos//derma-icon.png" alt="Icono de Dermatología" class="mr-3" width="60">
                    <span class="h5">Dermatología</span>
                </a>
            </div>
            <!-- Especialidad 3 -->
            <div class="col-md-6">
              <a href="{{ route('gastroenterologia')}}" class="d-flex align-items-center text-dark text-decoration-none rounded p-3 specialty-card">
                  <img src="assets/img/iconos//gastro-icon.png" alt="Icono de Cirugía General" class="mr-3" width="60">
                  <span class="h5">Gastroenterología</span>
              </a>
            </div>
    
            <!-- Especialidad 4 -->
            <div class="col-md-6">
                <a href="{{ route('ginecologia')}}" class="d-flex align-items-center text-dark text-decoration-none rounded p-3 specialty-card">
                    <img src="assets/img/iconos//gineco-icon.png" alt="Icono de Dermatología" class="mr-3" width="60">
                    <span class="h5">Ginecología</span>
                </a>
            </div>
            <!-- Especialidad 5 -->
            <div class="col-md-6">
              <a href="{{ route('odontologia')}}" class="d-flex align-items-center text-dark text-decoration-none rounded p-3 specialty-card">
                  <img src="assets/img/iconos//odonto-icon.png" alt="Icono de Cirugía General" class="mr-3" width="60">
                  <span class="h5">Odontología</span>
              </a>
            </div>
    
            <!-- Especialidad 6 -->
            <div class="col-md-6">
                <a href="{{ route('oftalmologia')}}" class="d-flex align-items-center text-dark text-decoration-none rounded p-3 specialty-card">
                    <img src="assets/img/iconos//oftalmo-icon.png" alt="Icono de Dermatología" class="mr-3" width="60">
                    <span class="h5">Oftalmología</span>
                </a>
            </div>
        </div>
      </div>
        <div class="container-fluid" style="height: 50px;"></div>
    </section>
  <!-- Comentarios -->
  <section>
    <div class="container-fluid align-items-center parallax">
      <div class="container-fluid" style="height: 50px;"></div>
      <div class="container">
        <h1 class="text-center mb-5 text-light">Comentarios de nuestros pacientes</h1>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <div class="col mb-4">
          <div class="card align-items-center bg-comentario">
            <img src="assets/img/index/user.svg" class=" user-icon m-comentario" alt="...">
            <h5 class="text-white">Carlos Nuñez</h5>
            <div class="card-body bg-light">
              <p class="card-text">
                He tenido experiencias excepcionales en la Clínica Tecsana. 
                Desde el momento en que entras, te envuelve una sensación acogedora 
                y profesionalismo. El personal es atento y siempre dispuesto a ayudar. 
                Los médicos y especialistas son altamente calificados, 
                brindando una atención médica de primera clase. Recomiendo encarecidamente la Clínica 
                Serenidad a aquellos que buscan una atención médica de calidad en 
                un entorno que prioriza la comodidad y la excelencia.
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card align-items-center bg-comentario">
            <img src="assets/img/index/user.svg" class=" user-icon m-comentario" alt="...">
            <h5 class="text-white">Lisbeth Torres</h5>
            <div class="card-body bg-light">
              <p class="card-text">
                La clínica Tecsana cuenta con instalaciones modernas y limpias, 
                lo que contribuye a un ambiente acogedor y de confianza. 
                Además, la eficiencia en la gestión de citas y la puntualidad 
                en el servicio son aspectos que realmente aprecio. 
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card align-items-center bg-comentario">
            <img src="assets/img/index/user.svg" class=" user-icon m-comentario" alt="...">
            <h5 class="text-white">Renata Lazo</h5>
            <div class="card-body bg-light">
              <p class="card-text">
                La Clínica Tecsana realmente ha marcado la diferencia en mi 
                experiencia de atención médica. Siempre 
                sentí una atmósfera de calma y profesionalismo. El personal es 
                increíblemente amable y siempre está dispuesto a ayudar. Lo 
                que más me sorprendió fue la atención personalizada que recibí 
                de los médicos, quienes no solo son expertos en sus campos, 
                sino que también se tomaron el tiempo de escuchar mis inquietudes 
                y responder a todas mis preguntas de manera comprensible.
              </p>
            </div>
          </div>
        </div>
        <div class="container-fluid" style="height: 50px;"></div>
      </div>
    </div>
  </section>

@endsection