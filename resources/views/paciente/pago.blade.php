@extends('layouts.plantilla')
@section('content')
    <main class="main_pago">
      <div class="main_pago-div">
        <form action="#" method="POST" class="credit-card-div">
          <legend class="main_pago-title">Pago con Visa</legend>
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Número de la tarjeta"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font">Expiry Month</span>
                  <input type="text" class="form-control" placeholder="MM" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font">Expiry Year</span>
                  <input type="text" class="form-control" placeholder="YY" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font"> CCV</span>
                  <input type="text" class="form-control" placeholder="CCV" />
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                  <img src="img/index/tarjeta-de-credito.png" class="img-rounded"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pad-adjust">
                  <input type="text" class="form-control" placeholder="Nombre del titular"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 pad-adjust">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked class="text-muted" /> Save details for fast payments <a href="#"> learn how ?</a>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input type="submit" class="btn btn-secondary" value="REGRESAR" />
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input type="submit" class="btn btn-secondary btn-block" value="PAGAR"/>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </main>
@endsection