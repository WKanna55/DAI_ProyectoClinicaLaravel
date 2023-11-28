@extends ('layouts.plantilla')
@section ('content')
        <main>
        <!-- Carrusel de imagenes -->   
            <section class="p-5 d-flex gap-5 justify-content-center">
                <div class="d-flex flex-column justify-content-between align-items-center gap-4 col-md-8">
                    <div class="d-flex flex-column justify-content-between align-items-center gap-4 col-md-6">
                        <h2 class="agenda_title">Agenda tu cita</h2>
                    <form action="" class="agenda_form d-flex gap-5 flex-column p-4">
            
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Especialidad</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Selecciona la especialidad...</option>
                                <option value="Medicina General">Medicina General</option>
                                <option value="Oftalmología">Oftalmología</option>
                                <option value="Odontología">Odontología</option>
                                <option value="Ginecología">Ginecología</option>
                                <option value="Urología">Urología</option>
                                <option value="Neurología">Neurología</option>
                                <option value="Neumología">Neumología</option>
                                <option value="Cardiología">Cardiología</option>
                                <option value="Gastroenterología">Gastroenterología</option>
                                <option value="Endocrinología">Endocrinología</option>
                                <option value="Pediatría">Pediatría</option>
                                <option value="Psicología">Psicología</option>
                            </select>
                        </div>

            
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Fecha</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Selecciona la fecha...</option>
                                <option value="Fecha 01">Fecha 01</option>
                                <option value="Fecha 02">Fecha 02</option>
                                <option value="Fecha 03">Fecha 03</option>
                                <option value="Fecha 04">Fecha 04</option>
                                <option value="Fecha 05">Fecha 05</option>
                                <option value="Fecha 06">Fecha 06</option>
                                <option value="Fecha 07">Fecha 07</option>
                            </select>
                        </div>
            
                        <div class="input-group">
                            <label class="input-group-text" for="inputGroupSelect01">Doctor</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Selecciona un doctor...</option>
                                <option value="Juan Pérez">Dr. Juan Pérez</option>
                                <option value="Ana Rodríguez">Dra. Ana Rodríguez</option>
                                <option value="Carlos Gutiérrez">Dr. Carlos Gutiérrez</option>
                                <option value="María Martínez">Dra. María Martínez</option>
                                <option value="Antonio López">Dr. Antonio López</option>
                                <option value="Laura González">Dra. Laura González</option>
                                <option value="Eduardo Sánchez">Dr. Eduardo Sánchez</option>
                                <option value="Patricia Ramírez">Dra. Patricia Ramírez</option>
                                <option value="Jorge Fernández">Dr. Jorge Fernández</option>
                                <option value="Carmen Ruiz">Dra. Carmen Ruiz</option>
                                <option value="Luis Gonzales">Dr. Luis Gonzales</option>
                                <option value="Beatriz Herrera">Dra. Beatriz Herrera</option>
                                <option value="Manuel Silva">Dr. Manuel Silva</option>
                                <option value="Isabel Torres">Dra. Isabel Torres</option>
                                <option value="Javier Vargas">Dr. Javier Vargas</option>
                            </select>
                        </div>

            
                        <div class="agenda_form-input d-flex gap-3 flex-column">
                            <label for="">Selecciona el horario:</label>
                            <div class="d_flex gap-3 flex-column">
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 1')">Hora 1</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 2')">Hora 2</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 3')">Hora 3</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 4')">Hora 4</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 5')">Hora 5</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 6')">Hora 6</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 7')">Hora 7</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 1')">Hora 1</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 2')">Hora 2</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 3')">Hora 3</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 4')">Hora 4</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 5')">Hora 5</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 6')">Hora 6</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 7')">Hora 7</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 6')">Hora 6</button>
                                <button type="button" class="btn bg-info species-btn m-1" onclick="seleccionarEspecie('Hora 7')">Hora 7</button>
                              </div>
                        
                              <!-- Input oculto para almacenar el valor seleccionado -->
                              <input type="hidden" id="especieInput">
                        </div>
            
                        <h2 style="text-align: center;">S/. 200</h2>
            
                        <div class="agenda_form-submit text-center">
                            <input type="submit" value="Agendar">
                        </div>
                        
            
                    </form>
                    </div>  
                    
                </div>

                <div class="container col-md-3">
                    <div class="container d-flex justify-content-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary m-3 d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Video de explicación
                        </button>
                    </div>
                    
                    
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Video explicativo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <iframe width="460" height="280" src="https://www.youtube.com/embed/TU_CODIGO" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="card text-center card mt-2 mb-2">
                        <div class="card-header">
                          Resumen de Cita
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-4">Oftalmología</h5>
                            <p class="card-text">Fecha: Fecha 01</p>
                            <p class="card-text">Doctor: Fecha 01</p>
                            <p class="card-text">Hora: Fecha 01</p>
                    </div>
                </div>
                
            </section>

            
        </main>
    
 @endsection