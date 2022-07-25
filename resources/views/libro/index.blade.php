@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Listar Libros</h1>
@stop

@section('content')
	 <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libro') }}
                            </span>

                             <div class="float-right">
                                @can('crear-libro')
                                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Editorial</th>
                                        <th>Año</th>								
										<th>Autor</th>
                                        <th>Categoria</th>
                                        <th>Stock</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td>{{ ++$i }}</td>                                            											
											<td>{{ $libro->nombre }}</td>
                                            <td>{{ $libro->editorial }}</td>
                                            <td>{{ $libro->anyo }}</td>	
                                            <td>{{ $libro->autor->nombre }}</td>					
                                            <td>{{ $libro->categoria->nombre }}</td>                                            
                                            <td>{{ $libro->stock }}</td>
                                            <td>
                                                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">
                                                    @can ('detalle-libro')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libros.show',$libro->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can('editar-libro')
                                                    <a class="btn btn-sm btn-success" href="{{ route('libros.edit',$libro->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-libro')
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
                {!! $libros->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop