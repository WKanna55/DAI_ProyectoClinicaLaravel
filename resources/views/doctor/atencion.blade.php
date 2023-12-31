@extends ('layouts.plantilla')
@section ('content')

<main>

<div class="container-t">
  <!-- historial -->
  <div class="d-grid justify-content-end mt-4 mr-4">
    <button class="btn btn-his historial" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Historial
    </button>
  </div>
  
  <!-- Modal INICIO -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-4" id="exampleModalLabel">Historial medico paciente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="table-responsive atencion">
            <table class="table table-hover">
              <thead class="">
                <tr class="">
                  <th class="col-2" scope="col">Fecha</th>
                  <th class="col-2" scope="col">Valoración</th>
                  <th class="col-2" scope="col">Alergia</th>
                  <th class="col-3" scope="col">Receta</th>
                  <th class="col-3" scope="col">Doctor</th>
                </tr>
              </thead>
              <tbody class="">
                
                @foreach ($patient->Appointment as $cita_paciente)
                  @if($cita_paciente->condicion == "finalizado")
                    <tr class="">
                      <td class="col-2">{{$cita_paciente->Shift->fecha}}</td>
                      <td class="col-2">{{$cita_paciente->Diagnosis->valoracion}}</td>
                      <td class="col-2">{{$cita_paciente->Diagnosis->alergias}}</td>
                      <td class="col-3">{{$cita_paciente->Diagnosis->receta}}</td>
                      <td class="col-3">{{$cita_paciente->Doctor->nombres}} {{$cita_paciente->doctor->apellidos}}</td>
                    </tr>
                  @endif
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal FIN -->

  <div class="container-fluid p-4">
    
    <div class="row">
      <!-- Lado izquierdo más pequeño -->
      <div class="col-md-4  d-flex flex-column p-3">
        <!-- Contenido del lado izquierdo -->
        <div class="card mb-4">
          <div class="card-body">
            <h3 class="card-title">Paciente</h3>
  

              


                <div class="row mb-2">
                  <label for="nombre" class="col-sm-3 col-form-label col-form-label-sm">Nombre</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" value="{{ $patient->nombres }}"   readonly>
                  </div>
                </div>
      
                <div class="row mb-3">
                    <label for="apellido" class="col-sm-3 col-form-label col-form-label-sm">Apellido</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="apellido" value="{{ $patient->apellidos }}" readonly>
                    </div>
                </div>
              
          
        
                <div class="row mb-3">
                  <label for="horario" class="col-sm-3 col-form-label col-form-label-sm">Horario</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control form-control-sm" id="horario" value="{{ $appointment->Shift->Schedule->horario }}" readonly>
                  </div>
                </div>
              
                <div class="row mb-3">
                    <label for="fecha" class="col-sm-3 col-form-label col-form-label-sm">Fecha</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="fecha" value="{{ $appointment->Shift->fecha }}" readonly>
                    </div>
                </div>
              
        
              
                  <div class="row mb-3">
                      <label for="especialidad" class="col-sm-3 col-form-label col-form-label-sm">Especialidad</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control form-control-sm" id="especialidad" value="{{ $doctor->Specialty->nombre }}" readonly>
                      </div>
                  </div>
                  
              

             
                  <div class="row mb-3">
                      <label for="doctor" class="col-sm-3 col-form-label col-form-label-sm">Doctor</label>
                      <div class="col-sm-9">
                          <input type="text" class="form-control form-control-sm" id="doctor" value="{{ $doctor->nombres }} {{ $doctor->apellidos }}"  readonly>
                      </div>
                  </div>
                
        
        </div>
        
        <div class="col-md-4">
          </div>
        </div>
        </div>

      <!-- Lado derecho más grande -->
      <div class="col-md-8  d-flex flex-column p-3">
        <!-- Contenido del lado derecho -->
        <div class="card">
          <div class="card-body" >
            <h3 class="card-title">Consulta</h3>
            
          <form action="{{ route('atencion') }}" method="POST">

            {{ csrf_field() }}

            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error}}</li>
                @endforeach
            </ul>

            <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
            
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Alergias
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <textarea class="form-control" name="alergias" id="accordionContentOne" rows="2" >@if($appointment->condicion == 'finalizado'){{$diagnostico[0]->alergias}}@endif</textarea>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Operaciones Anteriores
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <textarea class="form-control" name="operAnteriores" id="accordionContentOne" rows="2" >@if($appointment->condicion == 'finalizado'){{$diagnostico[0]->operAnteriores}}@endif</textarea>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Síntomas
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <textarea class="form-control" name="sintomas" id="accordionContentOne" rows="2" >@if($appointment->condicion == 'finalizado'){{$diagnostico[0]->sintomas}}@endif</textarea>
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                    Valoración
                  </button>
                </h2>
                <div id="flush-collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <textarea class="form-control" name="valoracion" id="accordionContentOne" rows="2" >@if($appointment->condicion == 'finalizado'){{$diagnostico[0]->valoracion}}@endif</textarea>
                  </div>
                </div>
              </div> <br>

 <!-- RECEtA-->
              <h3 class="card-title">Receta medica</h3>
              <div class="form-group">
              
                <div class="container text-center">
                  <div class="row align-items-start">
                    <div class="col">
                      Medicamentos e instrucciones <br>
                      <textarea class="form-control" name="receta" id="accordionContentOne" rows="6" >@if($appointment->condicion == 'finalizado'){{$diagnostico[0]->receta}}@endif</textarea>
                    </div>
                    
                  </div>
                </div> <br>
                @if($appointment->condicion == 'finalizado')
                  <input type="hidden" name="diagnostico_id" value="{{ $diagnostico[0]->id }}">
                @endif
              </div>
              <div class="d-flex justify-content-end">
                @if($appointment->condicion == 'pendiente')
                  <button type="submit" class="btn btn-his historial">Enviar</button>
                @elseif($appointment->condicion == 'finalizado')
                  <button type="submit" class="btn btn-act actualizar">Actualizar</button>
                @endif
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

      </div>
    </div>
  </div>
</div>
</main>

@endsection
