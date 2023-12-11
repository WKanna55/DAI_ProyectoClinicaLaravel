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
                  @if(auth()->user()->role_id == 1)
                  <a href="{{ route('perfilPaciente') }}" class="btn btn-primary">Ver citas</a>
                  @elseif(auth()->user()->role_id == 3)
                  <a href="{{ route('admin') }}" class="btn btn-admi admin">Finalizar</a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</main>


@endsection