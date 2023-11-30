@extends('layouts.plantilla')
@section('content')
    <main>
      <!-- Descripción -->
      <section>
        <div class="container-fluid align-items-center parallax">
          <div class="container-fluid" style="height: 50px"></div>
          <div class="container nosotros">
            <h1 class="mb-10 titulo" style="font-size: 4em">
              <strong>Bienvenido</strong>
            </h1>
            <h2 class="text-light" style="font-size: 3em; margin-bottom: 100px">
              a nuestra Clínica
            </h2>
            <div class="row row-cols-1 row-cols-sm-2">
              <div class="d-flex">
                <div style="margin-right: 30px">
                  <img
                    src="assets/img/index/especialidades_icon/heart-pulse.svg"
                    class="card-img-top icon-especializacion"
                    style="width: 100px; height: 100px"
                  />
                </div>
                <div>
                  <h5 class="titulo" style="font-size: 1.5em">
                    X años siendo parte de tu vida
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
                <div style="margin-right: 30px">
                  <img
                    src=" assets/img/index/especialidades_icon/heart-pulse.svg"
                    class="card-img-top icon-especializacion"
                    style="width: 100px; height: 100px"
                  />
                </div>
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
      <section class="bg-seccion b-nosotros">
        <div class="container-fluid"></div>
        <div class="container nosotros align-items-center d-flex">
          <div>
            <h2 class="titulo" style="font-size: 3em; margin-bottom: 50px">
              Somos la primera clínica...
            </h2>
            <div class="row">
              <div>
                <h5 class="titulo" style="font-size: 1.5em">
                  Nuestra Misión
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
                <h5 class="titulo" style="font-size: 1.5em; margin-top: 20px">
                  Nuesta Visión
                </h5>
                <div class="card-body">
                  <p class="card-text" style="font-size: 1.2em">
                    Liderar el servicio de salud en nuestra ciudad, diferenciándonos por nuestros 
                    valores, calidez humana, calidad y responsabilidad social para con todos nuestros clientes.
                  </p>
                </div>
              </div>
            </div>
            <div class="container-fluid" style="height: 50px"></div>
          </div>
          <div>
            <img
              src="assets/img/index/comentarios-bg.jpg"
              class="card-img-top icon-especializacion"
              style="width:500px; height:100%; margin-left: 50px"
            />
          </div>
        </div>
      </section>
      <!-- Historia -->
      <section class="bg-seccion b-nosotros2">
        <div class="container-fluid"></div>
        <div class="container nosotros align-items-center d-flex">
          <div>
            <img
              src="assets/img/index/comentarios-bg.jpg"
              class="card-img-top icon-especializacion"
              style="width:500px; height:100%; margin-right: 50px"
            />
          </div>
          <div>
            <h2 class="titulo" style="font-size: 3em; margin-bottom: 50px">
              Nuestra Historia Médica
            </h2>
            <div class="row">
              <div>
                <h5 class="titulo" style="font-size: 1.5em">
                  Nuestra Misión
                </h5>
                <div class="card-body">
                  <p class="card-text" style="font-size: 1.2em; margin-bottom: 20px">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, laboriosam autem! Provident sint, 
                    harum quas iure dolorem facilis esse dolores dolorum modi! Eos maxime id culpa praesentium eveniet voluptatum et. 
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt ut voluptatem harum sit amet illum qui magnam. 
                    Dolorum consectetur commodi, omnis, delectus ipsum totam, fuga aliquid quis optio quasi cumque?. Lorem ipsum dolor 
                    sit amet consectetur adipisicing elit. Debitis vel odit consequuntur, rem, assumenda, quos dolores possimus esse obcaecati 
                    voluptatibus nostrum perferendis. Commodi mollitia dolorem libero iure in quae aliquid. Lorem ipsum dolor sit amet consectetur 
                    adipisicing elit. Quidem in recusandae velit! Soluta inventore magni incidunt vel dolore fugiat, ex quam quas unde deleniti iste 
                    distinctio. Ut et blanditiis laboriosam!
                  </p>
                </div>
              </div>
            </div>
            <div class="container-fluid" style="height: 50px"></div>
          </div>
        </div>
      </section>
    </main>
@endsection