@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Detalles de la Persona</h1>
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
                            <a class="btn btn-primary" href="{{ route('personas.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $persona->nombres }}
                        </div>                   
                        <div class="form-group">
                            <strong>Carnet:</strong>
                            {{ $persona->carnet }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $persona->email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $persona->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $persona->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $persona->tipo }}
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