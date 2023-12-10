@extends('layouts.plantilla')
@section('content')

<main>
    <div class="container-fluid mt-5 mb-5 ">
      <div class="row d-flex flex-column justify-content-center align-items-center">
  
        <div class="col-2 texto admin mb-5">
          <h2>Administrador</h2>
        </div>
        dd($appointment)
        <div class="col-10">
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
      </div>
    </div>
  </main>

@endsection