@extends ('layouts.plantilla')
@section ('content')

<main>
    <section>
        <div class="container-agedar custom-px-10">
            <h1 class="text-center">Reserva tu Cita</h1>
            <div class="text-center mt-5">
                <div class="step-circle"></div>
                <div class="step-circle bg-secondary"></div>
                <div class="step-circle bg-secondary"></div>
                <div class="step-circle bg-secondary"></div>
            </div>
            <h2 class="pt-5 pb-2">Especialidad</h2>
            <form action="{{ route('showDoctores') }}" method="post" onsubmit="return validarSeleccionEspecialidad()">
                @csrf
                <select class="form-select" aria-label="Default select example" name="specialty_id">
                    <option selected>Selecciona la especialidad</option>
                    @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}">{{ $especialidad->nombre }}</option>
                    @endforeach
                </select>
                <div class="pt-5 pb-3 text-center">
                    <input class="btn btn-info" type="submit" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" value="Siguiente"></input>
                </div>
            </form>
        </div>
    </section>
</main>

<script>
    function validarSeleccionEspecialidad() {
        var selectedEspecialidad = document.getElementsByName('specialty_id')[0].value;
        if (selectedEspecialidad === 'Selecciona la especialidad') {
            alert('Por favor, selecciona una especialidad.');
            return false; // Evita que el formulario se envíe si no se selecciona una especialidad
        }
        return true; // Permite que el formulario se envíe si se ha seleccionado una especialidad
    }
</script>

@endsection
