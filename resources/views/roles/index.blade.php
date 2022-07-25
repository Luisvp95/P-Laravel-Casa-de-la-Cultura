@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Roles</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Crear Roles') }}
                            </span> 
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                       @can('crear-rol')
                       <div class="float-right">
                        <a class="btn btn-primary btn-sm float-right" data-placement="left" href="{{ route('roles.create') }}">Nuevo</a>
                        </div>
                       @endcan

                       <table class="table table-striped mt-2">
                            <thead style="background-color:#fff">
                                    <th style="color:#000;">Rol</th>
                                    <th style="color:#000;">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach ($roles as $role )
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @can('editar-rol')
                                        <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Editar</a>
                                    @endcan

                                    @can('borrar-rol') 
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline'])!!}                                          
                                            {!! Form::submit('borrar', ['class'=> 'btn btn-danger']) !!}                   
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                             @endforeach
                            </tbody>
                       </table>
                    </div>
                </div>
                {!! $roles->links() !!}
            </div>
        </div>
    </div>
    @stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop