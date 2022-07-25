@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Editar Libros</h1>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Editar Datos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('libros.update', $libro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('libro.form')

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
