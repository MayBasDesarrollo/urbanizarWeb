@extends('layout')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3"></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('prop.home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item active">1 Ambiente</li>
        </ol>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Blog Post -->
                <div class="card mb-4">
                    <!-- Carusel -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            {{-- /*800x400*/ --}}
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('img/propiedades/d1.jfif')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/propiedades/d2.jfif')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('img/propiedades/d3.jfif')}}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="card-body">
                        <h2 class="card-title">1 Ambiente</h2>
                        {{--  <i class="fas fa-map-marked-alt"></i>  --}}
                        <i class="fas fa-map-marker-alt"></i>
                        <small> Migueletes 1306 , Belgrano, Capital Federal</small>
                        <hr>

                        <p class="card-text text-justify">
                            Excel. Piso Esq. Vista Bosque Palermo, Campo Golf, Vilas Tenis Club. Dueño
                            DUEÑO ALQUILA Piso único, 170 m2. 3 Dormitorios ( 1 en suite).
                            Gran Living y Comedor apaisados a balcones aterrazados 2º baño completo y toitlette de recepción.
                            Excelente Coc. Com. con regio equipamiento nuevo; lavadero Depcias. servicio; baulera.
                            Pisos de parquet de Roble Americano. Servicios centrales . Estado impecable .
                            Migueletes esq. Teodoro García Piso 10º frente Av. del Libertador . Todo externo.
                        </p>
                        <hr>

                        <div class="float-left" style="padding-left: 20px;">
                            <i class="fas fa-vector-square fa-2x" style="color:#3d5afe"></i>
                            <strong>170m2 </strong>
                            <small>Superficie Total</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;">
                            <i class="fas fa-expand fa-2x" style="color:#3d5afe"></i>
                            <strong>170m2 </strong>
                            <small>Superficie Cubierta</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;">
                            <i class="fas fa-door-open fa-2x" style="color:#3d5afe"></i>
                            <strong>4</strong>
                            <small>Ambientes</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;">
                            <i class="fas fa-bath fa-2x" style="color:#3d5afe"></i>
                            <strong>3</strong>
                            <small>Baños</small>
                        </div>

                        <div class="float-left" style="padding-left: 20px;padding-top: 10px">
                            <i class="far fa-snowflake fa-2x" style="color:#3d5afe"></i>
                            <strong>2</strong>
                            <small>Frio/Calor</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 10px">
                            <i class="fas fa-dumbbell fa-2x" style="color:#3d5afe"></i>
                            <strong><i class="fas fa-check"></i></strong>
                            <small>Gym</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 10px">
                            <i class="fas fa-bed fa-2x" style="color:#3d5afe"></i>
                            <strong>2</strong>
                            <small>Dormitorios</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 10px">
                            <i class="fas fa-burn fa-2x" style="color:#3d5afe"></i>
                            <strong>1</strong>
                            <small>Calefación</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 10px">
                            <i class="fas fa-user-secret fa-2x" style="color:#3d5afe"></i>
                            <strong><i class="fas fa-check"></i></strong>
                            <small>Seguridad/Vigilancia</small>
                        </div>

                        <div class="float-left" style="padding-left: 20px;padding-top: 10px">
                            <i class="fas fa-swimming-pool fa-2x" style="color:#3d5afe"></i>
                            <strong><i class="fas fa-check"></i></strong>
                            <small>Piscina</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 20px">
                            <i class="fas fa-warehouse fa-2x" style="color:#3d5afe"></i>
                            <strong>1</strong>
                            <small>Cochera</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 20px">
                            <i class="fas fa-stroopwafel fa-2x" style="color:#3d5afe"></i>
                            {{-- <i class="fas fa-concierge-bell fa-2x" style="color:#3d5afe"></i> --}}
                            <strong><i class="fas fa-check"></i></strong>
                            <small>Parrilla</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 20px">
                            <i class="fas fa-box fa-2x" style="color:#3d5afe"></i>
                            <strong>1</strong>
                            <small>Baulera</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 20px">
                            <i class="fab fa-dyalog fa-2x" style="color:#3d5afe"></i>
                            <strong>1</strong>
                            <small>Balcón</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 20px">
                            <i class="fas fa-store fa-2x" style="color:#3d5afe"></i>
                            <strong>1</strong>
                            <small>Balcón Terraza</small>
                        </div>
                        <div class="float-left" style="padding-left: 20px;padding-top: 20px">
                            <i class="fas fa-columns fa-2x" style="color:#3d5afe"></i>
                            <strong>3</strong>
                            <small>Ascensores</small>
                        </div>
                    </div>


                    <div class="card-footer text-muted">
                        <i class="fas fa-history"><small>  Modificado: 02-11-2018</small></i>
                    </div>
                </div>


            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4>Alquiler <small class="float-right">$ 25.000</small> </h4>
                        <h6>Expensas <small class="float-right">$ 2.000</small> </h6>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Contacto</h5>
                    <div class="card-body text-justify">
                        Estas interesado en esta propiedad, no dudes en llamarnos (11 2363 6235) o dejarnos un <a href="" data-toggle="modal" data-target="#infoModal">mensaje</a>.
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
