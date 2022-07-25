@extends('adminlte::page')

@section('title', 'Biblioteca')

@section('content_header')
	<h1>Listar Usuarios</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios') }}
                            </span>

                             <div class="float-right">
                                @can('crear-usuario')
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Email</th>
                                        <th>Rol</th>
										<th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ $usuario->id }}</td>                              
											<td>{{ $usuario->name }}</td>
											<td>{{ $usuario->email }}</td>
                                            <td>
                                                @if(!empty($usuario->getRoleNames()))
                                                    @foreach($usuario->getRoleNames() as $rolName)
                                                <h5><span class="badge badge-dark"> {{$rolName}}</span></h5>   
                                                @endforeach
                                                @endif
                                            </td>
                                            <td>    
                                                    @can ('detalle-usuario')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    @endcan
                                                    @can('editar-usuario')                               
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuarios.edit',$usuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan                                                   
                                                    {!! Form::open(['method' => 'DELETE', 'route'=> ['usuarios.destroy', $usuario->id], 'style'=>'display:inline']) !!}
                                                    @can('borrar-usuario')
                                                    {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                    @endcan
                                                    {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
	<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
	
@stop