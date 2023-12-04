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
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <a href="{{ route('atencion')}}">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6 class="">Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="col mb-3">
                            <div class="card card-blue align-items-center bg-user p-3">
                                <h6>Carlos Nuñez</h6>
                                <div class="d-flex justify-content-between align-items-center col-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                    </svg>
                                    <p class="m-0">8:00</p>
                                </div>

                            </div>
                        </div>
                    </a>


                </div>
            </div>
            
        </div>
    </section>

</main>
@endsection