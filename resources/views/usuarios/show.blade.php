@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Detalles del Usuario</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuarios->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuarios->email }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                             @if(!empty($usuarios->getRoleNames()))
                                @foreach($usuarios->getRoleNames() as $rolName)
                            <h5><span class="badge badge-dark"> {{$rolName}}</span></h5>   
                            @endforeach
                            @endif 
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop