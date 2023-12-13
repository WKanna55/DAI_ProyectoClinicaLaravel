@extends ('layouts.plantilla')
@section ('content')

<main>
    <!-- Doctor generales-->
    <section class="container-fluid align-items-center p-4 mt-3">
        <h2 class="text-center p-2 mt-3">Dr. {{ $doctor->nombres }} {{ $doctor->apellidos }}</h2>
        <div class="container-sm mx-auto text-center p-2">
            <label for="fotoInput" class="cursor-pointer">
                <img id="fotoPreview" style="max-width: 30%" src="{{assets('asset/img/doctor/'. $doctor->img_source)}}" alt="Foto de doctor">
            </label>
        </div>
    </section>
    <!-- Citas -->
    <section>
        <div class="container doctor">
            <form action="{{ route('atencion') }}" id="citapost">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <input type="hidden" name="appointment_id" id="cita_selector" value="">
                    <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
                    
                    @foreach ($citasHoy as $cita)
                        @if ($cita->condicion == 'pendiente')
                            <div class="col mb-3" onclick="seleccionarCita('{{ $cita->id }}')">
                                <div class="card card-blue align-items-center bg-user p-3">
                                    <h6 class="text-white">{{ $cita->nombres }} {{ $cita->apellidos }}</h6>
                                    <p class="m-0"><i class="bi bi-clock pr-2 text-white"></i>{{ $cita->horario }}</p>
                                </div>
                            </div>
                        @elseif ($cita->condicion == 'finalizado')
                            <div class="col mb-3" onclick="seleccionarCita('{{ $cita->id }}')">
                                <div class="card card-red align-items-center bg-user-red p-3">
                                    <h6 class="text-white">{{ $cita->nombres }} {{ $cita->apellidos }}</h6>
                                    <p class="m-0"><i class="bi bi-clock pr-2 text-white"></i>{{ $cita->horario }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </form>
        </div>
    </section>
</main>

<script>
    function seleccionarCita(id_cita) {
        document.getElementById('cita_selector').value = id_cita;
        document.getElementById('citapost').submit();
    }
</script>

@endsection
