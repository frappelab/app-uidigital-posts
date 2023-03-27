@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-24">
                <h2>Agregar post</h2>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Revisa algunos campos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('posts.store') }}" method="POST">
        @csrf


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-16">
                <div class="form-group">
                    <strong>Título:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Título">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-24">
                <div class="form-group">
                    <strong>Categoria:</strong>
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->title }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 mb-24">
                <div class="form-group">
                    <strong>Posteado:</strong>
                    <select class="form-control" name="state" id="state">
                        <option value="post">Si</option>
                        <option value="no_post">No</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-24">
                <div class="form-group">
                    <strong>Contenido:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Contenido"></textarea>
                </div>
            </div>
            <div class="flex">
                <a class="btn btn-ui-secundary" href="{{ route('posts.index') }}"> Volver</a>
                <button type="submit" class="btn btn-ui-primary">Guardar</button>
            </div>
        </div>


    </form>
@endsection
