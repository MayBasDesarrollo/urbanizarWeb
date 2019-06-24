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
                            <small>Creación de Usuarios</small>
                        </div>
                        <div class="card-body">
                            <form action="{{ url("usuarios/{$user->id}") }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" value="{{ old('name', $user->name) }}">
                                        @if ($errors->has('name'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email', $user->email) }}">
                                        @if ($errors->has('email'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Mayor a 6 Caracteres">
                                        @if ($errors->has('password'))
                                            <div class="invalid-feedback">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                    
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-center">
                                            <a class="btn btn-ike" href="{{ route('users.index') }}" role="button">Volver</a>
                                            <button type="submit" class="btn btn-outline-ike mb-2">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection