@extends ('layouts.plantilla')
@section ('content')

    <main>
        <section>
            <div class="container-agedar custom-px-10">
                <h1 class="text-center">Reserva tu Cita</h1>
                <div class="text-center mt-5">
                    <div class="step-circle bg-danger"></div>
                    <div class="step-circle bg-danger"></div>
                    <div class="step-circle bg-danger"></div>
                    <div class="step-circle bg-secondary"></div>
                </div>
                <h2 class="pt-5 pb-2">Fecha</h2>
                <form action="{{ route('showHorarios') }}" method="post">
                    @csrf
                    <select class="form-select" aria-label="Default select example" name="fecha" id="selectFecha">
                        <option selected>Selecciona la Fecha</option>
                        
                        @foreach($fechas as $fecha)
                            <option value="{{$fecha->fecha}}">{{ $fecha->fecha }}</option>
                        @endforeach

                    </select>

                    <input type="hidden" name="id_doctor" value="{{$fechas[0]->doctor_id}}">

                    <div class="pt-5 pb-3 text-center">
                        <input class="btn btn-primary" type="submit" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" value="Siguiente">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- partial -->

@endsection