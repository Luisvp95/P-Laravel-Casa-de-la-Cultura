@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Listar Categorias</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categoria') }}
                            </span>
                            
                             <div class="float-right">
                                @can('crear-categoria')
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $categoria->nombre }}</td>

                                            <td>
                                                <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">
                                                    @can ('detalle-categoria')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('categorias.show',$categoria->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can('editar-categoria')
                                                    <a class="btn btn-sm btn-success" href="{{ route('categorias.edit',$categoria->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-categoria')
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
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop
