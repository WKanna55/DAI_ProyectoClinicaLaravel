@extends('layouts.plantilla')
@section('content')
    <main>
      <!-- Descripción -->
      <section>
        <div class="container-fluid align-items-center parallax-nosotros">
          <div class="container-fluid" style="height: 50px"></div>
          <div class="container nosotros">
            <h1 class="mb-10 titulo text-center" style="font-size: 4em; margin-bottom: 20px">
              <strong>Bienvenido</strong>
            </h1>
            <h2 class="titulo text-center" style="font-size: 3em; margin-bottom: 100px;">
              a Tecsana
            </h2>

            <div class="row row-cols-1 row-cols-lg-2">
              <div class="d-flex">
                
                <div>
                  <h5 class="titulo" style="font-size: 1.5em">
                    18 años siendo parte de tu vida
                  </h5>
                  <div class="card-body">
                    <p class="card-text" style="font-size: 1.2em">
                      Nos dedicamos fervientemente a la salud y el bienestar de
                      cada uno de nuestros pacientes. Contamos con un equipo
                      médico altamente calificado, instalaciones modernas y
                      brindamos una atención personalizada, todo ello diseñado
                      para garantizar una experiencia positiva y de alta
                      calidad.
                    </p>
                  </div>
                </div>
              </div>
              <div class="d-flex">
                
                <div>
                  <h5 class="titulo" style="font-size: 1.5em">
                    ¡Nos renovamos para ti!
                  </h5>
                  <div class="card-body">
                    <p class="card-text" style="font-size: 1.2em">
                      A lo largo de cinco décadas dedicadas al cuidado de la
                      salud, la Clínica se actualiza de manera continua con el
                      objetivo de ofrecer instalaciones modernas e innovadoras
                      para tu beneficio.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="container-fluid" style="height: 50px"></div>
          </div>
        </div>
      </section>


      <!-- Visión y Misión -->
      <section class="">
        <div class="container nosotros align-items-center ">
          <div class="row">
            
            <div class="col-lg-6 col-12 order-lg-1 order-sm-1">
              <div class="row">
                
                <div>
                  <h5 class="titulo" style="font-size: 3em">
                    Misión
                  </h5>
                  <div class="card-body">
                    <p class="card-text" style="font-size: 1.2em; margin-bottom: 20px">
                      Brindar atención a nuestros pacientes para devolverles la salud y la 
                      felicidad a través de una atención comprometida, médicos profesionales y 
                      equipamiento de primera calidad.
                    </p>
                  </div>
                </div>
                <div>
                  <h5 class="titulo" style="font-size: 3em; margin-top: 0px">
                    Visión
                  </h5>
                  <div class="card-body">
                    <p class="card-text" style="font-size: 1.2em">
                      Liderar el servicio de salud en nuestra ciudad, diferenciándonos por nuestros 
                      valores, calidez humana, calidad y responsabilidad social para con todos nuestros clientes.
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-12 order-lg-2 order-sm-2">
              <img
              src="assets/img/index/comentarios-bg.jpg"
              class="card-img-top icon-especializacion"
              style="width:100%; height:100% "
              />
            </div>
            
          </div>
        </div>
      </section>


      <!-- Historia -->
      <section class="">
        
        <div class="container nosotros align-items-center">
          <div class="row">

            <div class="col-lg-6 col-12 order-lg-1 order-sm-2">
              <img
              src="assets/img/index/comentarios-bg.jpg"
              class="card-img-top icon-especializacion"
              style="width:100%; height:100%; margin-right:50px"
              />
            </div>

            <div class="col-lg-6 col-12 order-lg-2 order-sm-1">
              <div class="row align-items-center">
                <h2 class="titulo" style="font-size: 3em; margin-bottom: 20px">
                  Nuestra Historia Médica
                </h2>
                <div class="card-body">
                  <p class="card-text" style="font-size: 1.2em; margin-bottom: 20px">
                    Hace 18 años, en 2005, nació la clínica Tecsana, fundada por la Dra. Ana Gómez con la misión de proporcionar atención médica de calidad. Inicialmente modesta, la clínica ha experimentado un notable crecimiento en infraestructura, servicios y especialidades médicas. Comprometida con la innovación y la comunidad, Tecsana se enorgullece de su legado de atención excepcional y se compromete a seguir siendo un recurso vital para la salud en los años venideros.
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>
    </main>
@endsection