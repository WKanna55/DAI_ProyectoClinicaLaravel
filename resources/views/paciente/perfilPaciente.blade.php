@extends ('layouts.plantilla')
@section ('content')

    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <input type="file" id="seleccionarImagen" style="display: none;">
                    <img src="fotoperfil.png" alt="Avatar">
                    <button type="button" class="boton-avatar" onclick="document.getElementById('seleccionarImagen').click();">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <div>
                    <input type="file" id="seleccionarFondo" style="display: none;">
                    <button type="button" class="boton-portada" onclick="document.getElementById('seleccionarFondo').click();">
                        <i class="far fa-image"></i> Cambiar fondo
                    </button>
                </div>                
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"> {{$patient->nombres}} {{$patient->apellidos}}</h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="perfil-usuario-footer">
                
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-id-card"></i> DNI: {{$patient->user->dni}}</li>
                        <li><i class="icono fas fa-phone-alt"></i>{{$patient->telefono}}</li>
                        <li><i class="icono fas fa-envelope"></i>{{$patient->email}}</li>
                        <li><i class="icono fas fa-calendar-alt"></i>{{$patient->fecha_nacimiento}}</li>
                        <li><i class="icono fas fa-map-signs"></i>{{$patient->direccion}}</li>
                    </ul>
                  <div> 
                    <button class="boton-editar" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                      <i class="far fa-edit">Editar</i> 
                    </button>
                  </div>
            </div>

            <div class="perfil-usuario-citas">
                <div class="container-fluid perfil-usuario-citas-header mb-5 mt-3">
                  <h3 class="titulo">Citas</h3>
                  <button class="boton-historial-paciente" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                    <i class="far fa-eye">Historial</i> 
                  </button>
                </div>

                <div class="container-fluid perfil-usuario-citas-main">
                  <div class="perfil-usuario-cita row gap-3 ml-5">

                    @foreach ($cita as $c)
                    <div class="card col-5 card-cita">
                      <div class="card-body">
                        <h5 class="card-title">{{$c->doctor->specialty->nombre}}</h5>
                        <p class="card-text">Dr: {{$c->doctor->nombres}} {{$c->doctor->apellidos}}</p>
                        <p class="card-text">Consultorio: {{$c->doctor->consultorio}}</p>
                        <p class="card-text">{{$c->shift->fecha}}</p>
                        <p class="card-text">{{$c->shift->schedule->horario}}</p>
                      </div>
                    </div>
                    @endforeach

                  </div>
                </div>
                
            </div>

            <section>
                <!-- Modal  profile Inicio-->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-m">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-4" id="exampleModalLabel">Actualizar Datos</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="form-responsive datos">
                            <!-- formulario -->
                            <form method="post" action="{{route('actualizarPaciente')}}">
                              @csrf
                              <div class="mb-3">
                                  <label for="nombre" class="form-label">DNI</label>
                                  <input type="text" class="form-control" name="dni" value="{{$patient->user->dni}}">
                              </div>
                              <div class="mb-3">
                                <label for="nombre" class="form-label">Nombres</label>
                                <input type="text" class="form-control" name="nombres" value="{{$patient->nombres}}">
                              </div>
                              <div class="mb-3">
                                  <label for="nombre" class="form-label">Apellidos</label>
                                  <input type="text" class="form-control" name="apellidos" value="{{$patient->apellidos}}">
                              </div>
                              <div class="mb-3">
                                  <label for="nombre" class="form-label">Telefono</label>
                                  <input type="text" class="form-control" name="telefono" value="{{$patient->telefono}}">
                              </div>
                              <div class="mb-3">
                                  <label for="nombre" class="form-label">Direccion</label>
                                  <input type="text" class="form-control" name="direccion" value="{{$patient->direccion}}">
                              </div>
                              <div class="mb-3">
                                  <label for="nombre" class="form-label">Email</label>
                                  <input type="text" class="form-control" name="email" value="{{$patient->email}}">
                              </div>
                              <div class="mb-3">
                                  <label for="nombre" class="form-label">Fecha Nacimiento</label>
                                  <input type="date" class="form-control" name="fecha_nacimiento" value="{{$patient->fecha_nacimiento}}">
                              </div>
                              <input type="hidden" name="id" value={{$patient->id}}>
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" value="Confirmar cambios"></input>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </section>
            <!--====  End of modal profile  ====-->

          <!-- Modal del historial de citas -->
          <section>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel">Historial medico</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive atencion">
                      <table class="table table-hover">
                        <thead class="">
                          <tr class="">
                            <th class="col-2" scope="col">Fecha</th>
                            <th class="col-2" scope="col">Diagnostico</th>
                            <th class="col-2" scope="col">Alergia</th>
                            <th class="col-3" scope="col">Receta</th>
                            <th class="col-3" scope="col">Doctor</th>
                          </tr>
                        </thead>
                        <tbody class="">

                          @foreach ($cita_historial as $c)
                                                       
                          <tr class="">
                            <td class="col-2">{{$c->shift->fecha}}</td>
                            <td class="col-2">{{$c->diagnosis->valoracion}}</td>
                            <td class="col-2">{{$c->diagnosis->alergias}}</td>
                            <td class="col-3">{{$c->diagnosis->receta}}</td>
                            <td class="col-3">{{$c->doctor->nombres}} {{$c->doctor->apellidos}}</td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>
          <!-- Modal FIN -->
        </div>
    </section>

    <!--====  End of html  ====-->
@endsection