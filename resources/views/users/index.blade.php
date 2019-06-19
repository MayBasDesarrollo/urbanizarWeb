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
                            <div class="row">
                                <div class="col-sm">
                                    <div class="d-flex justify-content-start">
                                        <a href="{{ route('users.create') }}" type="submit" class="btn btn-outline-ike mb-2">
                                            <i class="fas fa-user-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-secondary">
                                        <tr  style="color: white;background-color: #3d5afe;">
                                            <th style="width: 250px;" scope="col" >Nombre </th>
                                            <th style="width: 500px;" scope="col">Correo Electrónico </th>
                                            <th style="width: 200px;" scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->name}}</th>
                                                <td>{{$user->email}}</td>
                                                <td class="text-center">
                                                    <form action="{{ route('users.delete', $user) }}" method="POST">
                                                        {{ method_field('DELETE') }}
                                                        {!! csrf_field() !!}
                                                        <a href="{{ route('users.show', $user) }}" class="btn btn-link">
                                                            <i style="color: yellowgreen;" class="fas fa-user"></i>
                                                        </a>
                                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-link">
                                                            <i style="color: steelblue;" class="fas fa-user-edit"></i>
                                                        </a>
                                                        <button type="submit" class="btn btn-link">
                                                            <i style="color: indianred;" class="fas fa-user-times"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <p>No hay usuarios registrados.</p>
                                        @endforelse
                                    </tbody>
                                </table>
                                {{--  <div class="row">
                                    <span class="mx-auto">{{ $users->links() }}</span>
                                </div>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection