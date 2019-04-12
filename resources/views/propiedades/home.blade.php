@extends('layout')

@section('content')

    <header>
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
        <div class="container" style="">
            <div class="row justify-content-md-center centrarUrba">
                <div class="col-md-offset-3 col-md-9">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('buscador.principal') }}">
                                            {!! csrf_field() !!}
                                            <div class="input-group">
                                                <select class="custom-select" name='tprop_id'>
                                                    <option value="0" selected>Tipo de Propiedad</option>
                                                    @foreach ($tipPropiedades as $tipo)
                                                        <option value="{{ $tipo->id }}">{{ $tipo->descripcion }}</option>
                                                    @endforeach
                                                </select>
                                                {{--  <input type="text" aria-label="First name" class="form-control" placeholder="Zona">  --}}
                                                <select class="custom-select" name='topeprop_id'>
                                                    <option value="0" selected>Tipo de Operación</option>
                                                    @foreach ($tipOperaPropiedades as $tipoOpe)
                                                        <option value="{{ $tipoOpe->id }}">{{ $tipoOpe->descripcion }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="input-group-prepend">
                                                    {{--  <a href="{{ route('prop.index') }}" style="text-decoration:none; ">
                                                        <span class="input-group-text">Ir</span>
                                                    </a>  --}}
                                                    <button class="btn btn-outline-secondary" type="submit">Ir</button>
                                                </div>
                                                @if ($errors->has('tprop_id') )
                                                    <div class="">
                                                        {{ $errors->first('tprop_id') }}
                                                    </div>
                                                @endif
                                                </div>
                                                @if ($errors->has('topeprop_id') )
                                                    <div class="">
                                                        {{ $errors->first('topeprop_id') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
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
    </div>
    
@endsection
