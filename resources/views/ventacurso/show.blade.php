@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Detalles de la venta</h1>
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
                            <a class="btn btn-primary" href="{{ route('ventacursos.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona:</strong>
                            {{ $ventacurso->persona->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Carnet:</strong>
                            {{ $ventacurso->persona->carnet }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $ventacurso->persona->email }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $ventacurso->persona->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $ventacurso->persona->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $ventacurso->curso->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Total:</strong>
                            {{ $ventacurso->curso->costo }}
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