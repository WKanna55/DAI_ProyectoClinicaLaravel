@extends ('layouts.plantilla')
@section ('content')


<main>
    <div class="container-fluid col-10 d-flex flex-column gap-3">

        <div class="container-fluid m-2 d-flex flex-column align-items-center">
            <h2 class="display-4 m-5">¡ Pago Exitoso !</h2>
            <img class="pago_exitoso mb-5" src="{{ asset('assets/img/pago_exitoso.png')}}" alt="imagen_pago_exitoso">


            <p class="mb-5 text-center">Felicitaciones, puedes visualizar tus citas en tu perfil, haz click en el siguiente botón para redirigirte</p>
            <a class="btn btn-primary" href="{{route('perfilPaciente')}}">Ver citas</a>
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