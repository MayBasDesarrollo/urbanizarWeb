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
            <li class="breadcrumb-item active">Búsqueda</li>
        </ol>

        <div class="row">

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
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

            </div>

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                    <div class="media baner-prop">
                        <a href="{{ url("/propiedades/2") }}">
                            <img class="align-self-start mr-3" src="{{asset('img/propiedades/d1.jfif')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                            <a href="{{ url("/propiedades/2") }}" style="text-decoration:none;color:black;">
                                <h5 class="mt-0">1 Ambiente</h5>
                            </a>
                                <p>
                                    Excel. Piso Esq. Vista Bosque Palermo, Campo Golf, Vilas Tenis Club. Dueño
                                    DUEÑO ALQUILA Piso único, 170 m2. 3 Dormitorios ( 1 en suite). Gran Living
                                    y Comedor apaisados a balcones aterrazados.
                                </p>
                            <small class="float-right">$ 25.000</small>
                            <i class="fas fa-history"><small>  Modificado: 02-11-2018</small></i>
                        </div>
                    </div>

                    <div class="media baner-prop">
                        <a href="{{ url("/propiedades/2") }}">
                            <img class="align-self-start mr-3" src="{{asset('img/propiedades/d1.jfif')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                            <a href="{{ url("/propiedades/2") }}" style="text-decoration:none;color:black;">
                                <h5 class="mt-0">1 Ambiente</h5>
                            </a>
                            <p>
                                Excel. Piso Esq. Vista Bosque Palermo, Campo Golf, Vilas Tenis Club. Dueño
                                DUEÑO ALQUILA Piso único, 170 m2. 3 Dormitorios ( 1 en suite). Gran Living
                                y Comedor apaisados a balcones aterrazados.
                            </p>
                            <small class="float-right">$ 25.000</small>
                            <i class="fas fa-history"><small>  Modificado: 02-11-2018</small></i>
                        </div>
                    </div>

                    <div class="media baner-prop">
                        <a href="{{ url("/propiedades/2") }}">
                            <img class="align-self-start mr-3" src="{{asset('img/propiedades/d1.jfif')}}" alt="Generic placeholder image">
                        </a>
                            <div class="media-body">
                            <a href="{{ url("/propiedades/2") }}" style="text-decoration:none;color:black;">
                                    <h5 class="mt-0">1 Ambiente</h5>
                            </a>
                                <p>
                                Excel. Piso Esq. Vista Bosque Palermo, Campo Golf, Vilas Tenis Club. Dueño
                                DUEÑO ALQUILA Piso único, 170 m2. 3 Dormitorios ( 1 en suite). Gran Living
                                y Comedor apaisados a balcones aterrazados.
                            </p>
                            <small class="float-right">$ 25.000</small>
                            <i class="fas fa-history"><small>  Modificado: 02-11-2018</small></i>
                        </div>
                    </div>

                    <div class="media baner-prop">
                        <a href="{{ url("/propiedades/2") }}">
                            <img class="align-self-start mr-3" src="{{asset('img/propiedades/d1.jfif')}}" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                            <a href="{{ url("/propiedades/2") }}" style="text-decoration:none;color:black;">
                                <h5 class="mt-0">1 Ambiente</h5>
                            </a>
                            <p>
                                Excel. Piso Esq. Vista Bosque Palermo, Campo Golf, Vilas Tenis Club. Dueño
                                DUEÑO ALQUILA Piso único, 170 m2. 3 Dormitorios ( 1 en suite). Gran Living
                                y Comedor apaisados a balcones aterrazados.
                            </p>
                            <small class="float-right">$ 25.000</small>
                            <i class="fas fa-history"><small>  Modificado: 02-11-2018</small></i>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item">
                        <a class="page-link" href="#">&larr; </a>
                        </li>
                        <li class="page-item disabled">
                        <a class="page-link" href="#"> &rarr;</a>
                        </li>
                    </ul>

            </div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
