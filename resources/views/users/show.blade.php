@extends('admin.layouts.app')

@php
    $vista = "Usuarios";    
@endphp

@section('content')
    
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Configuraciones</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Usuarios</strong>
                            <small>Administración de Usuarios</small>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-user"></i><strong class="card-title pl-2">Perfil de Usuario</strong>
                                </div>
                                <div class="card-body">
                                    <div class="mx-auto d-block">
                                        <img class="rounded-circle mx-auto d-block" src="{{ asset('img/propiedades-alquiler.png') }}" alt="Card image cap">
                                        <h5 class="text-sm-center mt-2 mb-1">{{$user->name}}</h5>
                                        <div class="location text-sm-center"><i class="fas fa-envelope"></i> {{$user->email}}</div>
                                    </div>
                                    <hr>
                                    <a class="btn btn-primary float-right" href="{{ route('users.edit', $user) }}" role="button">Editar</a>
                                    <a class="btn btn-primary" href="{{ route('users.index') }}" role="button">Volver</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection