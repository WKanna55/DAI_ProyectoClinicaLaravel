@extends ('layouts.plantilla')
@section ('content')

<main>

    <!-- Doctor generales-->
    <section class="container-fluid align-items-center p-4 mt-3">
        <h2 class="text-center p-2 mt-3">Dr. Pedro Ramírez</h2>
        <div class="container-sm mx-auto text-center p-2">
            <img style="max-width: 10%" src="Prototipo/img/doctor.png" alt="Foto de doctor">
        </div>
        
    </section>



    <!-- Citas -->
    <section>
        <div class="container-fluid align-items-center p-5 col-md-8">
            <!-- <div class="container-fluid" style="height: 50px;"></div> -->
            <div class="container doctor">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>8:00</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>8:00</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>8:00</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>8:00</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>8:00</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>8:00</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <p class="m-0"><i class="bi bi-clock pr-2"></i>8:00</p>
                            </div>
                        </div>
                    </a>

                    

                </div>
            </div>
            
        </div>
    </section>

</main>
@endsection