@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-16">
                <h2> Usuario</h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="card-dashboard card-dashboard--auto mb-16">
            <div class="card-dashboard__show">
                <div class="card-dashboard__show__img card-dashboard__show__img--user"></div>
                <div class="card-dashboard__show__fields">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <div class="form-group">
                            <strong>Rol:</strong>
                            @if (!empty($user->getRoleNames()))
                                @foreach ($user->getRoleNames() as $v)
                                    <label class="badge text-bg-primary">{{ $v }}</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-ui-secundary" href="{{ route('users.index') }}"> Volver</a>
    </div>
@endsection
