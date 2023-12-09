@extends ('layouts.plantilla')
@section ('content')


<main>
    
    <div class="container-fluid  pago-cont">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card pago">
                <img src="{{ asset('assets/img/pago_cancelado.png')}}" class="card-img-top pago" alt="pago exitoso">
                <div class="card-body">
                  <h5 class="card-title">Pago Cancelado</h5>
                  <p class="card-text">Su pago fue rechazado, la cita no se registro, intente de otro metodo.</p>
                  <a href="{{ route('home') }}" class="btn btn-primary">Inicio</a>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection