@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Detalles del libro</h1>
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
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                      
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $libro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Editorial:</strong>
                            {{ $libro->editorial }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $libro->anyo }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $libro->autor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $libro->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $libro->stock }}
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