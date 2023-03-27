@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-24">
            <h2>Administrar Roles</h2>
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Rol</th>
        <th width="150px">Acciones</th>
    </tr>
    
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td class="flex">
            <a class="btn-action" href="{{ route('roles.show',$role->id) }}"><span class="btn-action--view"></span></a>
            @can('editar-rol')
                <a class="btn-action" href="{{ route('roles.edit',$role->id) }}"><span class="btn-action--edit"></span></a>
            @endcan
            @can('borrar-rol')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id], 'class' => 'btn-action']) !!}
                    {!! Form::submit('', ['class' => 'btn-action--delete']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
<div class="pull-right">
    @can('crear-rol')
        <a class="btn btn btn-ui-primary" href="{{ route('roles.create') }}"> Crear rol</a>
        @endcan
    </div>

{!! $roles->render() !!}

@endsection