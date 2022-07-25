@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Listar Prestamo</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prestamo') }}
                            </span>

                             <div class="float-right">
                                @can('crear-prestamo')
                                <a href="{{ route('prestamos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Persona</th>
										<th>Libro</th>
										<th>Fecha Prestamo</th>
										<th>Fecha Devolucion</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($prestamos as $prestamo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $prestamo->persona->nombres }} {{$prestamo->persona->apellidos}}</td>
											<td>{{ $prestamo->libro->nombre }}</td>
											<td>{{ $prestamo->fecha_prestamo }}</td>
											<td>{{ $prestamo->fecha_devolucion }}</td>

                                            <td>
                                                <form action="{{ route('prestamos.destroy',$prestamo->id) }}" method="POST">
                                                    @can ('detalle-prestamo')
                                                    <a class="btn btn-sm btn-primary " href="{s{ route('prestamos.show',$prestamo->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can('editar-prestamo')
                                                    <a class="btn btn-sm btn-success" href="{{ route('prestamos.edit',$prestamo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-prestamo')
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
                {!! $prestamos->links() !!}
            </div>
        </div>
    </div>
    @stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop