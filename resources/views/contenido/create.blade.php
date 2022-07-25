@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Registrar Contenido del Curso</h1>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ingresar Datos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contenidos.index') }}"> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contenidos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('contenido.form')

                        </form>
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
