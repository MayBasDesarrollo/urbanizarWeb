@extends('layout')

@section('content')

    <header>
        <div class="container" style="position:absolute;z-index:10;padding-top:250px;padding-left:150px">
            <div class="row justify-content-md-center">
                <div class="col align-self-center">
                    <form action="">
                        <div class="input-group">
                            <select class="custom-select" id="inputGroupSelect01">
                                <option value="0" selected>Tipo de Propiedad</option>
                                <option value="1">Departamento</option>
                                <option value="2">Casa</option>
                                <option value="3">Comercial</option>
                                <option value="4">Otro</option>
                            </select>
                            <input type="text" aria-label="First name" class="form-control" placeholder="Zona">
                            <select class="custom-select" id="inputGroupSelect02">
                                <option value="0" selected>Tipo de Operación</option>
                                <option value="1">Alquiler</option>
                                <option value="2">Alquiler Temporario</option>
                                <option value="3">Compra</option>
                            </select>
                            <div class="input-group-prepend">
                                <a href="{{ route('prop.index') }}" style="text-decoration:none; ">
                                    <span class="input-group-text">Ir</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url({{asset('img/ima1.jpg')}})">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h3>First Slide</h3>
                    <p>This is a description for the first slide.</p>
                </div> -->
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url({{asset('img/ima2.jpg')}})">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h3>Second Slide</h3>
                    <p>This is a description for the second slide.</p>
                </div> -->
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{asset('img/ima1.jpg')}}')">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h3>Third Slide</h3>
                    <p>This is a description for the third slide.</p>
                </div> -->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <header class="section-header mb-3">
            <h4> Destacadas</h4>
            <p>
                En Urbanizar te ofrecemos variedad de propiedades para que puedas elegir en la que se adapte más a tus necesidades,
                aca te mostramos algunas de las propiedades mas destacadas que ofrecemos.
            </p>
        </header>

        <div class="row">
            @foreach ($propiedades as $propiedad) 
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        @foreach ($propiedad->imagenesPropiedades as $imagen)
                            <a href="{{ route('prop.show', ['id'=> $propiedad->id]) }}">
                                <img class="card-img-top" src="{{asset($imagen->ruta)}}" alt="" style="height: 161.27px;">
                            </a> 
                            @break
                        @endforeach
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('prop.show', $propiedad) }}" style="text-decoration:none;color:black;">{{$propiedad->nombre}}</a>
                            </h4>
                            <p class="card-text">
                                {{ str_limit($propiedad->descripcion, 220)}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <!--
        <div class="row">
            <div class="col-lg-6">
                <h2>¿Sabias Que?</h2>
                <p class="text-justify">
                    El Museo Histórico Sarmiento, ubicado en el barrio porteño de Belgrano, es un museo dedicado a la historia argentina,
                    en particular a la Generación del 80. La mayor parte del museo está destinada a exposiciones acerca de Domingo Faustino Sarmiento,
                    un literato y político sanjuanino que presidió el país entre 1868 y 1874, en especial a su obra literaria;
                    otras secciones tratan de Nicolás Avellaneda, su sucesor en la presidencia,
                    y sobre la revuelta producida por la federalización de Buenos Aires en 1880,
                    cuando el gobierno nacional debió abandonar la ciudad e instalarse en el edificio que el museo ocupa actualmente,
                    a la sazón municipalidad de Belgrano.
                </p>
                <p><strong> Dirección: Cuba 2079, C1428 CABA </strong></p>
            </div>
            <div class="col-lg-6">
                {{--  <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">  --}}
                <img class="img-fluid rounded" src="{{asset('img/sabias/museosarmiento.jpg')}}" alt="">
            </div>
        </div>
        -->
        <!-- /.row -->

        {{-- <hr> --}}

    </div>
    <!-- /.container -->

@endsection
