@extends('layouts.plantilla')
@section('content')

<main>
    <div class="container-fluid mt-5 mb-5 ">
      <div class="row d-flex flex-column justify-content-center align-items-center">
  
        <div class="col-2 texto admin mb-5">
          <h2>Administrador</h2>
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
            <!-- Tab registrar cita INICIO -->
            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="tab-1">
  
              <!-- Contenido input -->
              <div class="container p-5">
                <div class="row">
                  <div class="col-lg-10 col-xl-7 mx-auto">
                    <h3 class="display-4">Registrar cita</h3>
                    <p class="text-muted mb-4">Ingrese los datos requeridos</p>
                    <form>
                      <div class="form-group mb-3">
                        <input type="text" placeholder="User Id" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
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
            <!-- Tab registrar cita FIN -->
  
  
            <!-- Tab tabla citas INICIO -->
            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="tab-2">
  
              <div class="card admin">
  
                <div class="table-responsive admin">
                  <table class="table">
                    <thead class="">
                      <tr class="">
                        <th class="col-1">ID</th>
                        <th class="col-2">Nombre</th>
                        <th class="col-2">Apellido</th>
                        <th class="col-2">Especialidad</th>
                        <th class="col-2">Doctor</th>
                        <th class="col-2">Horario</th>
                        <th class="col-1">Opcion</th>
                      </tr>
                    </thead>
                    <tbody class="">
    
                      <tr class="">
                        <td class="col-1">1</td>
                        <td class="col-2">Juan Miguel</td>
                        <td class="col-2">Gomez Torres</td>
                        <td class="col-2">Cardiologia</td>
                        <td class="col-2">Jose Fernandez parrillo</td>
                        <td class="col-2">10:00 - 10:30</td>
                        <td class="col-1">
                          <a href=""><i class="bi bi-trash trash-icon"></i></a>
                        </td>
                      </tr>
    
                      <tr class="">
                        <td class="col-1">1</td>
                        <td class="col-2">Juan Miguel</td>
                        <td class="col-2">Gomez Torres</td>
                        <td class="col-2">Cardiologia</td>
                        <td class="col-2">Jose Fernandez parrillo</td>
                        <td class="col-2">10:00 - 10:30</td>
                        <td class="col-1">
                          <a href=""><i class="bi bi-trash trash-icon"></i></a>
                        </td>
                      </tr>
    
                      <tr class="">
                        <td class="col-1">1</td>
                        <td class="col-2">Juan Miguel</td>
                        <td class="col-2">Gomez Torres</td>
                        <td class="col-2">Cardiologia</td>
                        <td class="col-2">Jose Fernandez parrillo</td>
                        <td class="col-2">10:00 - 10:30</td>
                        <td class="col-1">
                          <a href=""><i class="bi bi-trash trash-icon"></i></a>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
  
              
  
              </div>
  
              
  
  
            </div>
            <!-- Tab tabla citas FIN -->
  
          </div>
          <!-- Pills content fin -->
  
        </div>
      </div>
    </div>
  </main>

@endsection