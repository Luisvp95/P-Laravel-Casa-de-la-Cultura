@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Vender Curso</h1>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ingrese datos de la venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventacursos.index') }}"> Atras</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ventacursos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('ventacurso.form')

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