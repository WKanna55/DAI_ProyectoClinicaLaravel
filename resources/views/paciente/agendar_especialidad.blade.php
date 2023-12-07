@extends ('layouts.plantilla')
@section ('content')

    <main>
        <section>
            <div class="container-agedar custom-px-10">
                <h1 class="text-center">Reserva tu Cita</h1>
                <div class="text-center mt-5">
                    <div class="step-circle bg-danger"></div>
                    <div class="step-circle bg-secondary"></div>
                    <div class="step-circle bg-secondary"></div>
                    <div class="step-circle bg-secondary"></div>
                </div>
                <h2 class="pt-5 pb-2">Especialidad</h2>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona la especialdiad</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="pt-5 pb-3 text-center">
                    <button type="button" class="btn btn-primary"
                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                        Siguiente
                    </button>
                </div>
            </div>
        </section>
    </main>
    <!-- partial -->

@endsection
