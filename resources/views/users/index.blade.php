@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-24">
                <h2>Administrar usuarios</h2>
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
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Roles</th>
            <th width="150px">Acciones</th>
        </tr>
        @foreach ($data as $key => $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <label class="badge text-bg-primary">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                <td class="flex">
                    <a class="btn-action" href="{{ route('users.show', $user->id) }}"><span
                            class="btn-action--view"></span></a>
                    @can('editar-user')
                        <a class="btn-action" href="{{ route('users.edit', $user->id) }}"><span
                                class="btn-action--edit"></span></a>
                    @endcan
                    @can('borrar-user')
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['users.destroy', $user->id],
                        'class' => 'btn-action',
                    ]) !!}
                    {!! Form::submit('', ['class' => 'btn-action--delete']) !!}
                    {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-ui-primary" href="{{ route('users.create') }}">Crear usuario</a>
    </div>

    {!! $data->render() !!}
@endsection
