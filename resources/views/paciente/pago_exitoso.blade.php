@extends ('layouts.plantilla')
@section ('content')


<main>
    
    <div class="container-fluid  pago-cont">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card pago">
                <img src="{{ asset('assets/img/pago_exitoso.png')}}" class="card-img-top pago" alt="pago exitoso">
                <div class="card-body">
                    <h1 class="card-title"><strong>Pago Exitoso</strong></h1>
                  <p class="card-text">Su pago fue exitoso, se registro su cita con exito, esperamos verlo pronto.</p>
                  <a href="{{ route('perfilPaciente') }}" class="btn-verc">Ver citas</a>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    // Redirige a otraVista después de que la página se recargue
    setTimeout(() => {
        window.onload = function() {
        window.location.href="{{ route('home') }}";
        };
    }, 5000);
    
</script>

@endsection