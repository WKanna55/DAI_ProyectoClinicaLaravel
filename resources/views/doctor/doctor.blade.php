@extends ('layouts.plantilla')
@section ('content')

<main>

    <!-- Doctor generales-->
    <section class="container-fluid align-items-center p-4 mt-3">
        <h2 class="text-center p-2 mt-3">Dr.</h2>
        <div class="container-sm mx-auto text-center p-2">
            <label for="fotoInput" class="cursor-pointer">
                <img id="fotoPreview" style="max-width: 30%" src="" alt="Foto de doctor">
            </label>
        </div>
    </section>
    <!-- Citas -->
    <section>
        <div class="container doctor">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                
                    
                    <a href="{{ route('atencion')}}">
                        
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">{{ $cita->patient-> nombres}} {{ $cita->patient-> apellidos}}</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>{{ $cita->horario}}</p>
                            </div>
                        </div>
                    </a>
               
            </div>
        </div>
    </section>
</main>
@endsection
