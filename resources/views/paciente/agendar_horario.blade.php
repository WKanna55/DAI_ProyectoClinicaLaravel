@extends('layouts.plantilla')
@section('content')

<main>
    <section>
        <div class="container-agendar custom-px-10">
            <h1 class="text-center">Reserva tu Cita</h1>
            <div class="text-center mt-5">
                <div class="step-circle bg-danger"></div>
                <div class="step-circle bg-danger"></div>
                <div class="step-circle bg-danger"></div>
                <div class="step-circle bg-secondary"></div>
            </div>
            <h2 class="pt-5 pb-2">Horario</h2>

            @if(count($horarios) == 0)
            <p class="text-center">La fecha no tiene horarios disponibles actualmente.</p>
            @else
            <form action="{{ route('paypal') }}" method="post" id="horarioForm" onsubmit="return validarSeleccionHorario()">
                @csrf
                <select class="form-select" name="id_shift">
                    <option selected>Selecciona el horario</option>
                    @foreach($horarios as $horario)
                        <option value="{{ $horario->id }}">{{ $horario->horario }}</option>
                    @endforeach
                </select>
                @error('horario')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <input type="hidden" name="id_doctor" id="iddoctor" value="{{ $horarios[0]->doctor_id }}">
                <h2 class="pt-5 text-center">{{ $doctor->Specialty->costo }}</h2>
                <input type="hidden" name="precio" value="1">
                <div class="pt-5 text-center">
                    <input type="submit" class="btn btn-success"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" value="Pagar">
                </div>
            </form>
            @endif
        </div>
    </section>
</main>

<script>
    function validarSeleccionHorario() {
        var selectedHorario = document.querySelector('#horarioForm select[name="id_shift"]').value;
        if (selectedHorario === 'Selecciona el horario') {
            alert('Por favor, selecciona un horario.');
            return false; // Evita que el formulario se envíe si no se selecciona un horario
        }
        return true; // Permite que el formulario se envíe si se ha seleccionado un horario
    }
</script>

@endsection