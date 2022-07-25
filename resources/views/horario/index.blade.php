@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Lista Horarios de los Cursos</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Horario') }}
                            </span>

                             <div class="float-right">
                                @can ('crear-horario')
                                <a href="{{ route('horarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Hora Inicio</th>
										<th>Hora Fin</th>
										<th>Curso</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($horarios as $horario)
                                        <tr>
                                            <td>{{ ++$i }}</td>                                          
											<td>{{ $horario->hora_i }}</td>
											<td>{{ $horario->hora_f }}</td>
											<td>{{ $horario->curso->nombre }}</td>

                                            <td>
                                                <form action="{{ route('horarios.destroy',$horario->id) }}" method="POST">
                                                    @can ('detalle-horario')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('horarios.show',$horario->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can ('editar-horario')
                                                    <a class="btn btn-sm btn-success" href="{{ route('horarios.edit',$horario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can ('borrar-horario')
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
                {!! $horarios->links() !!}
            </div>
        </div>
    </div>
    @stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop