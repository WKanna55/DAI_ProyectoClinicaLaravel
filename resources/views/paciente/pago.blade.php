@extends ('layouts.plantilla')
@section ('content')
<main>
  <div class="container pago">
    <form class="row formulario g-4">
      <legend class="text-center titulo-formulario"><strong>Pago con Visa</strong></legend>
      <div class="col-md-12">
        <input type="text" class="form-control" id="validationDefault03" required placeholder="Número de tarjeta">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="validationDefault01" required placeholder="MM/AA">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" id="validationDefault02" required placeholder="CVV">
      </div>
      <div class="col-md-12">
        <input type="text" class="form-control" id="validationDefault03" required placeholder="Nombre del titular de la tarjeta">
      </div>
      <div class=" d-flex justify-content-evenly align-items-center">
        <button class="btn pago btn-lg" type="button">Volver</button>
        <button class="btn pago btn-lg" type="submit">Pagar</button>
      </div>
    </form>
  </div>  
</main>
@endsection