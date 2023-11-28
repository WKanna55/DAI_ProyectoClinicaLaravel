@extends('layouts.plantilla')
@section('content')

<main>
  <div class="container-fluid mt-5 mb-5">
    <div class="row justify-content-center align-items-center">

      <div class="col-2 texto admin">

        <img src="assets/img/index/user.svg" class="imagen user-admin" alt="">
        <p>Administrador: nombre</p>

      </div>
      <div class="col-10">

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
          <!-- nav tabs links -->
          <li class="nav-item admin" role="presentation">
            <a class="nav-link admin active" id="tab-1" data-bs-toggle="pill" href="#pills-1" role="tab"
              aria-controls="pills-1" aria-selected="true" data-bs-target="#pills-1">Registro de cita</a>
          </li>
          <li class="nav-item admin" role="presentation">
            <a class="nav-link admin" id="tab-2" data-bs-toggle="pill" href="#pills-2" role="tab"
              aria-controls="pills-2" aria-selected="false" data-bs-target="#pills-2">Citas</a>
          </li>
          
        </ul>
        <!-- Pills navs fin -->
        
        <!-- Pills content -->
        <div class="tab-content">
          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="tab-1">

            <!-- Contenido input -->
            <div class="container p-5">
              <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto">
                  <h3 class="display-4">Registrar cita</h3>
                  <p class="text-muted mb-4">Ingrese los datos requeridos</p>
                  <form>
                    <div class="form-group mb-3">
                      <input type="text" placeholder="Nombre" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>
                    <div class="form-group mb-3">
                      <input type="text" placeholder="Apellido" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>
                    <div class="form-group mb-3">
                      <input type="text" placeholder="DNI" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>
                    <div class="form-group mb-3">
                      <input type="text" placeholder="Telefono" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>
                    <div class="form-group mb-3">
                      <input type="date" placeholder="Fecha" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>
                    <div class="form-group mb-3">
                      <select class="form-select rounded-pill border-0 shadow-sm px-4 form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Especialidad</option>
                        <option value="Cardiologia">Cardiologia</option>
                        <option value="Neurologia">Neurologia</option>
                        <option value="Dermatologia">Dermatologia</option>
                        <option value="Dermatologia">...</option>
                      </select>
                    </div>

                    <div class="form-group mb-3">
                      <select class="form-select rounded-pill border-0 shadow-sm px-4 form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Horario</option>
                        <option value="1">8:00 - 8:30</option>
                        <option value="2">8:30 - 9:00</option>
                        <option value="3">9:00 - 9:30</option>
                        <option value="3">9:30 - 10:00</option>
                        <option value="3">10:00 - 10:30</option>
                        <option value="3">...</option>
                      </select>
                    </div>

                    <div class="form-group mb-3">
                      <input type="text" placeholder="Doctor" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>

                    <div class="form-group mb-3">
                      <input type="password" placeholder="Contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Registrar Cita</button>
                  </form>
                </div>
              </div>
            </div><!-- End -->

          </div>
          <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="tab-2">


            <div class="card admin">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">apellido</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Doctor</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Opciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr><tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Juan Miguel</td>
                    <td>Gomez Torres</td>
                    <td>Cardiologia</td>
                    <td>Jose Fernandez</td>
                    <td>10:00 - 10:30</td>
                    <td>
                      <a type="button" class="btn btn-primary" href="">eliminar</a>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>

            


          </div>
        </div>
        <!-- Pills content fin -->

      </div>
    </div>
  </div>
</main>

@endsection
