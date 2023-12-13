@extends('layouts.plantilla')
@section('content')

<main>
    <div class="container-fluid mt-5 mb-5 ">
      <div class="row d-flex flex-column justify-content-center align-items-center">
  
        <div class="col-2 texto admin mb-5">
          <h2>Administrador</h2>
        </div>
  
        <div class="col-10">
  
          
            

  
            <!-- Tab tabla citas INICIO -->
           
                  
              <div class="card admin">
                  
                <div class="table-responsive admin">
                  <table class="table">
                    <thead class="">
                      <tr class="">
                        <th class="col-1">ID</th>
                        <th class="col-2">Paciente</th>
                        <th class="col-2">DNI paciente</th>
                        <th class="col-2">Doctor</th>
                        <th class="col-1">Especialidad</th>
                        
                        <th class="col-2">Fecha</th>
                        <th class="col-1">Horario</th>
                        <th class="col-1">Condicion</th>
                        <th class="col-1">Opcion</th>
                      </tr>
                    </thead>
                    <tbody class="">
                    
                    @foreach($patient as $info)
                        <tr class="">
                            <td class="col-1">{{$info->id}}</td>
                            <td class="col-2">{{$info->Patient->nombres}} {{$info->Patient->apellidos}}</td>
                            <td class="col-2">{{$info->Patient->User->dni}}</td>
                            <td class="col-2">{{$info->Doctor->nombres}} {{$info->Doctor->apellidos}}</td>
                            <td class="col-1">{{$info->Doctor->Specialty->nombre}}</td>
                            
                            <td class="col-2">{{$info->Shift->fecha}}</td>
                            <td class="col-1">{{$info->Shift->Schedule->horario}}</td>
                            <td class="col-1">{{$info->condicion}}</td>
                            <td class="col-1">
                              @if($info->condicion == 'pendiente')
                                <a href="#" data-toggle="modal" data-target="#deleteModal{{$info->id}}">
                                    <i class="bi bi-trash trash-icon"></i>
                                </a>
                              @endif
                                
                              
                              
                              <!-- Modal de Eliminación -->
                              <div class="modal fade" id="deleteModal{{$info->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <form action="{{ route('admin.destroy')}}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <input type="hidden" name="id" value="{{$info->id}}">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                              <p>¿Estás seguro de que deseas eliminar a {{$info->Patient->nombres}} {{$info->Patient->apellidos}}?</p>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                              <input type="submit" class="btn btn-admi admin" value="Eliminar"></input>
                                          </div>
                                      </div>
                                    </form>
                                  </div>
                              </div>
                            </td>
                        </tr>
                      @endforeach

                      
                      
                    </tbody>
                  </table>
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