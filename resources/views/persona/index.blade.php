@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Listar Persona</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Persona') }}
                            </span>

                             <div class="float-right">
                                @can('crear-persona')
                                <a href="{{ route('personas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Carnet</th>
										<th>Email</th>
										<th>Direccion</th>
										<th>Celular</th>
										<th>Tipo</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $persona->nombres }}</td>
											<td>{{ $persona->carnet }}</td>
											<td>{{ $persona->email }}</td>
											<td>{{ $persona->direccion }}</td>
											<td>{{ $persona->celular }}</td>
											<td>{{ $persona->tipo }}</td>

                                            <td>
                                                <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">
                                                    @can ('detalle-persona')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personas.show',$persona->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can('editar-persona')
                                                    <a class="btn btn-sm btn-success" href="{{ route('personas.edit',$persona->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-persona')
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
                {!! $personas->links() !!}
            </div>
        </div>
    </div>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        
    @stop