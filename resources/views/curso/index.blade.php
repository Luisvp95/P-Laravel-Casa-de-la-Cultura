@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Listar Cursos</h1>
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Curso') }}
                            </span>

                             <div class="float-right">
                                @can ('crear-curso')
                                <a href="{{ route('cursos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursos as $curso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $curso->nombre }}</td>
											<td>{{ $curso->fecha_i }}</td>
											<td>{{ $curso->fecha_f }}</td>
											<td>{{ $curso->costo }}</td>

                                            <td>
                                                <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                                    @can ('detalle-curso')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cursos.show',$curso->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can ('editar-curso')
                                                    <a class="btn btn-sm btn-success" href="{{ route('cursos.edit',$curso->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can ('borrar-curso')
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
                {!! $cursos->links() !!}
            </div>
        </div>
    </div>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop
    
    @section('js')
        
    @stop