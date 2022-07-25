@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Editar Horario del Curso</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Información</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('horarios.update', $horario->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('horario.form')

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