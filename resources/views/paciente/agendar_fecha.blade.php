@extends ('layouts.plantilla')
@section ('content')

    <main>
        <section>
            <div class="container-agedar custom-px-10">
                <h1 class="text-center">Reserva tu Cita</h1>
                <div class="text-center mt-5">
                    <div class="step-circle "></div>
                    <div class="step-circle"></div>
                    <div class="step-circle"></div>
                    <div class="step-circle bg-secondary"></div>
                </div>
                <h2 class="pt-5 pb-2">Fecha</h2>

                @if(count(($fechas)) == 0)
                <p class="text-center">El doctor no tiene fechas asignadas actualmente.</p>
                @else
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
                            <input class="btn btn-info" type="submit" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" value="Siguiente">
                        </div>
                    </form>
                @endif
            </div>
        </section>
    </main>

@endsection