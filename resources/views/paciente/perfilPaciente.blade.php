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
                <h3 class="titulo">Nombre del Paciente</h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="perfil-usuario-footer">
                
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-id-card"></i> DNI:</li>
                        <li><i class="icono fas fa-map-signs"></i> Direccion:</li>
                        <li><i class="icono fas fa-phone-alt"></i> Telefono:</li>
                        <li><i class="icono fas fa-envelope"></i> Email:</li>
                    </ul>

                    <ul class="lista-datos">
                        <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento.</li>
                    </ul>

                  <section>
                    <button class="boton-editar" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                      <i class="far fa-edit">Editar</i> 
                    </button>
                    
                       <!-- Modal  Inicio-->
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
                                <form>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">DNI</label>
                                        <input type="text" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                      <label for="nombre" class="form-label">Nombre</label>
                                      <input type="text" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Telefono</label>
                                        <input type="text" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Direccion</label>
                                        <input type="text" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Fecha Nacimiento</label>
                                        <input type="date" class="form-control" id="nombre">
                                    </div>
                                  </form>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  <button type="button" class="btn btn-primary">Guardar cambios</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </section>
                 <!--====  End of modal  ====-->
            </div>
            <div class="perfil-usuario-citas">
                <h3 class="titulo">Citas</h3>
                <button class="boton-historial-paciente" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                   <i class="far fa-eye">Historial</i> 
                </button>
            </div>

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
                          <tr class="">
                            <td class="col-2">01/11/2023</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-3">Medicamento XYZ</td>
                            <td class="col-3">Dr. Rodríguez</td>
                          </tr>
                          <tr class="">
                            <td class="col-2">01/11/2023</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-3">Medicamento XYZ</td>
                            <td class="col-3">Dr. Rodríguez</td>
                          </tr>
                          <tr class="">
                            <td class="col-2">01/11/2023</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-3">Medicamento XYZ</td>
                            <td class="col-3">Dr. Rodríguez</td>
                          </tr>
                          <tr class="">
                            <td class="col-2">01/11/2023</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-3">Medicamento XYZ</td>
                            <td class="col-3">Dr. Rodríguez</td>
                          </tr>
                          <tr class="">
                            <td class="col-2">01/11/2023</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-3">Medicamento XYZ</td>
                            <td class="col-3">Dr. Rodríguez</td>
                          </tr>
                          <tr class="">
                            <td class="col-2">01/11/2023</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-3">Medicamento XYZ</td>
                            <td class="col-3">Dr. Rodríguez</td>
                          </tr>
                          <tr class="">
                            <td class="col-2">01/11/2023</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-2">Lorem ipsum dolor sit amet</td>
                            <td class="col-3">Medicamento XYZ</td>
                            <td class="col-3">Dr. Rodríguez</td>
                          </tr>
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