@extends ('layouts.plantilla')
@section ('content')
<main>
    <!-- Carrusel de imagenes -->   
        <section class="p-5 d-flex gap-5 justify-content-center">
            <div class="d-flex flex-column justify-content-between align-items-center gap-4 col-md-8">
                <div class="d-flex flex-column justify-content-between align-items-center gap-4 col-md-6">
                    <h2 class="agenda_title mt-4">Agenda tu cita</h2>
                <form action="{{ route('pago') }}" class="agenda_form d-flex gap-5 flex-column p-4">
        
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

        
                    <div class="input-group">
                      <label class="input-group-text" for="inputGroupSelect01">Hora</label>
                      <select class="form-select" id="inputGroupSelect01">
                          <option selected>Selecciona la hora...</option>
                          <option value="Hora 01">Hora 01</option>
                          <option value="Hora 02">Hora 02</option>
                          <option value="Hora 03">Hora 03</option>
                          <option value="Hora 04">Hora 04</option>
                          <option value="Hora 05">Hora 05</option>
                          <option value="Hora 06">Hora 06</option>
                          <option value="Hora 07">Fecha 07</option>
                      </select>
                    </div>
                    
                          <!-- Input oculto para almacenar el valor seleccionado -->
                          <input type="hidden" id="especieInput">
                  </div>
        
                  <div class="d-flex gap-4 align-items-center">
                    <p class=" m-0">Total a pagar: </p> 
                    <h2 class="text-center  m-0">S/. 200</h2>
                  </div>
                               
                  <div class="agenda_form-submit text-center m-4">
                      <input  class="btn btn-primary" type="submit" value="Agendar">
                  </div>
                    
        
                </form>
                </div>  
                
            </div>                
        </section>

        
    </main>
    
@endsection