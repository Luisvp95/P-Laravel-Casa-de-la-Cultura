@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Lista de Ventas</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ventas') }}
                            </span>

                             <div class="float-right">
                                @can ('crear-venta')
                                <a href="{{ route('ventacursos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Venta') }}
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
										<th>Estudiante</th>
										<th>Curso</th>
                                        <th>Precio Total</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventacursos as $ventacurso)
                                        <tr>
                                            <td>{{ ++$i }}</td>                                           
											<td>{{ $ventacurso->persona->nombres }}</td>
											<td>{{ $ventacurso->curso->nombre }}</td>
                                            <td>{{ $ventacurso->curso->costo }}</td>
                                            <td>
                                                <form action="{{ route('ventacursos.destroy',$ventacurso->id) }}" method="POST">
                                                    @can ('detalle-venta')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventacursos.show',$ventacurso->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can ('editar-venta')
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventacursos.edit',$ventacurso->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can ('borrar-venta')
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
                {!! $ventacursos->links() !!}
            </div>
        </div>
    </div>
    @stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop