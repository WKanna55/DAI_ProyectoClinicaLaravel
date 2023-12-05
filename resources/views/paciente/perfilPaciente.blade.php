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
                        <button type="button" class="boton-editar">
                            <i class="far fa-edit"></i> Editar
                        </button>
            </div>
            <div class="perfil-usuario-citas">
                <h3 class="titulo">Citas</h3>
                <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <table id="tablaCitas">
                    
                </table>
            </div>

        </div>
    </section>

    <!-- Modal de Editar datos -->
    <div class="modal" tabindex="-1" id="miModal" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Actualizar Datos</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ml-4 mr-4">
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
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
          </div>
        </div>
      </div>
       <!--====  End of modal  ====-->

    <!--====  End of html  ====-->
    <script>
        $(document).ready(function(){
          $(".boton-editar").click(function(){
            $("#miModal").modal('show');
          });
        });
    </script>

@endsection