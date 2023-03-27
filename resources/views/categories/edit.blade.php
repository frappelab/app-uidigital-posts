@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar categoria</h2>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12  mb-16">
                <div class="form-group">
                    <strong>Título:</strong>
                    <input type="text" name="title" value="{{ $category->title }}" class="form-control"
                        placeholder="Título">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-16">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción">{{ $category->description }}</textarea>
                </div>
            </div>
            <div class="flex">
                <a class="btn btn-ui-secundary" href="{{ route('categories.index') }}"> Volver</a>
                <button type="submit" class="btn btn-ui-primary">Actualizar</button>
            </div>
        </div>


    </form>
@endsection
