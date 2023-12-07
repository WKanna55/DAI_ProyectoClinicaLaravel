@extends ('layouts.plantilla')
@section ('content')

    <main>
        <section>
            <div class="container-agendar custom-px-10">
                <h1 class="text-center">Reserva tu Cita</h1>
                <div class="text-center mt-5">
                    <div class="step-circle bg-danger"></div>
                    <div class="step-circle bg-danger"></div>
                    <div class="step-circle bg-danger"></div>
                    <div class="step-circle bg-danger"></div>
                </div>
                <h2 class="pt-5 pb-2">Horario</h2>
                <form action="{{ route('showDoctores') }}" method="post" id="horarioForm">
                    <select class="form-select" aria-label="Default select example" name="horario_id">
                        <option selected>Selecciona el horario</option>
                        @foreach($horarios as $horario)
                            <option value="">{{ $horario->horario }}</option>
                        @endforeach
                    </select>   
                    <h2 class="pt-5 text-center">S/ 200.00</h2>
                    <div class="pt-5 text-center">
                        <button type="button" class="btn btn-success"
                            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Pagar
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- partial -->

@endsection