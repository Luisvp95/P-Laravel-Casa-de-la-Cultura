@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Editar Persona</h1>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Rol</span>
                    </div>
                    <div class="card-body">
                    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                    @csrf  
                        @include('roles.form')

                    {!! Form::close() !!}
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