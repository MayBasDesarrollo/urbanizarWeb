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
            <li class="breadcrumb-item active">{{$propiedad->nombre}}</li>
        </ol>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Blog Post -->
                <div class="card mb-4">
                    <!-- Carusel -->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($propiedad->imagenesPropiedades as $key=>$imagen)
                                @if ($key == 0)
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" style="height: 400px;" src="{{asset($imagen->ruta)}}">
                                    </div>                                    
                                @else
                                    <div class="carousel-item">
                                        <img class="d-block w-100" style="height: 400px;" src="{{asset($imagen->ruta)}}">
                                    </div>                                    
                                @endif
                            @endforeach
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
                        <h2 class="card-title">{{$propiedad->nombre}}</h2>
                        <i class="fas fa-map-marker-alt"></i>
                        <small>{{$propiedad->direccion}}</small>
                        <hr>
                        <p class="card-text text-justify">
                            {{$propiedad->descripcion}}
                        </p>
                        <hr>

                        @foreach ($detalles as $caracteristica)
                            <div class="float-left iconos">
                                <i class="{{ $caracteristica['1'] }}" style="color:#3d5afe"></i>
                                <strong>{{ $caracteristica['cantidad'] }}</strong>
                                <small>{{ $caracteristica['0'] }}</small>
                            </div>
                        @endforeach
                    </div>

                    <div class="card-footer text-muted">
                        <i class="fas fa-history">
                            <small>
                                @if ($propiedad->upadate_at == "")
                                    Creado: {{ substr($propiedad->created_at, 0, 10) }}
                                @else
                                    Modificado: {{ substr($propiedad->upadated_at, 0, 10) }}
                                @endif 
                            </small>
                        </i>
                    </div>
                </div>


            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h4>Alquiler <small class="float-right">$ {{ number_format($propiedad->valor, 0, ",", ".") }}</small> </h4>
                        <h6>Expensas <small class="float-right">$ {{ number_format($propiedad->expensas, 0, ",", ".") }}</small> </h6>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Contacto</h5>
                    <div class="card-body text-justify">
                        Estas interesado en esta propiedad, no dudes en llamarnos (11 2363 6235) o dejarnos un 
                        <a style="color:#007bff;cursor:pointer;" onclick="infoModal({{$propiedad->id}})">mensaje</a>.
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
