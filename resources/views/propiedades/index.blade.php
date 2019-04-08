@extends('layout')

@section('content')

    <div class="container">
        <h1 class="mt-4 mb-3"></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('prop.home') }}">Inicio</a>
            </li>
            <li class="breadcrumb-item active">Búsqueda</li>
        </ol>
        <div class="row">
            {{--  <div class="col-md-4">
                <div class="card mb-4">
                    <h5 class="card-header">Filtro</h5>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Zona</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Belgrano</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Recoleta</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Centro</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Ambientes</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">1 Ambiente</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">2 Ambientes</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">3 Ambientes</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Precio</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Desde</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Hasta</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Superficie</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Total</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cubierta</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Expensas</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Total</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cubierta</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Cochera</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Total</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cubierta</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Baulera</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Total</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cubierta</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Ascensores</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Total</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cubierta</label>
                        </div>
                    </div>
                    <hr>
                    <div style="padding:10px">
                        <h4 class="title-filtro">Baños</h4>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Total</label>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cubierta</label>
                        </div>
                    </div>
                </div>
            </div>  --}}
            <div class="col-md-12">
                @foreach ($propiedades as $propiedad) 
                    <div class="media baner-prop">
                        @foreach ($propiedad->imagenesPropiedades as $imagen)
                            <a href="{{ route('prop.show', ['id'=> $propiedad->id]) }}">
                                <img class="align-self-start mr-3" src="{{asset($imagen->ruta)}}" alt="" style="width:270px; height: 200px;">
                            </a> 
                            @break
                        @endforeach
                        <div class="media-body">
                            <a href="{{ route('prop.show', ['id'=> $propiedad->id]) }}" style="text-decoration:none;color:black;">
                                <h5 class="mt-0">{{ $propiedad->nombre}}</h5>
                            </a>
                            <p>{{ str_limit($propiedad->descripcion, 500) }}</p>
                            <small class="float-right">$ {{ $propiedad->valor }}</small>
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
                @endforeach
                <ul class="pagination justify-content-center mb-4">
                    {{ $propiedades->render() }}
                </ul>
            </div>
        </div>
    </div>

@endsection
