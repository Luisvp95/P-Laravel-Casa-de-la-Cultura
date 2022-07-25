@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Listas de Autor</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Autor') }}
                            </span>

                             <div class="float-right">
                                @can ('crear-autor')
                                <a href="{{ route('autors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                                @endcan
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>                                        
										<th>Nombre</th>
										<th>Nacionalidad</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autors as $autor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $autor->nombre }}</td>
											<td>{{ $autor->nacionalidad }}</td>

                                            <td>
                                                <form action="{{ route('autors.destroy',$autor->id) }}" method="POST">
                                                    @can ('detalle-autor')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autors.show',$autor->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can ('editar-autor')
                                                    <a class="btn btn-sm btn-success" href="{{ route('autors.edit',$autor->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can ('borrar-autor')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $autors->links() !!}
            </div>
        </div>
    </div>
    @stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop