@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Post</h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="card-dashboard card-dashboard--auto mb-16">
            <div class="card-dashboard__show">
                <div class="card-dashboard__show__img card-dashboard__show__img--post"></div>
                <div class="card-dashboard__show__fields">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $post->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Contenido:</strong>
                            {{ $post->description }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{  $post->category->title }}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Posteado:</strong>
                            {{  $post->state === 'no_post' ? 'No' : 'Si'}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-ui-secundary" href="{{ route('posts.index') }}">Volver</a>
    </div>
    </div>
@endsection
