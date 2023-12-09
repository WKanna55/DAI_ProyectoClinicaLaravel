@extends ('layouts.plantilla')
@section ('content')

<main>
    <div class="container-fluid col-10 d-flex flex-column gap-3">

        <div class="container-fluid m-2 d-flex flex-column align-items-center">
            <h2 class="display-4 m-5">¡ Pago Exitoso !</h2>
            <img class="pago_exitoso mb-5" src="{{ asset('assets/img/pago_exitoso.png')}}" alt="imagen_pago_exitoso">


            <p class="mb-5 text-center">Felicitaciones, puedes visualizar tus citas en tu perfil, haz click en el siguiente botón para redirigirte</p>

            <form action="{{ route('paypal_agendar')}}" method="post">
                <input class="btn btn-primary mb-5 btn-ver-citas" type="submit" value="Ver citas">
            </form>
        </div>

    </div>
</main>


@endsection