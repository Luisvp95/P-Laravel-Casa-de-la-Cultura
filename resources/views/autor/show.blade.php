@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Detalles del Autor</h1>
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
                            <a class="btn btn-primary" href="{{ route('autors.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $autor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $autor->nacionalidad }}
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