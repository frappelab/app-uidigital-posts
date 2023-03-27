@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-24">
                <h2>Posts</h2>
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
            <th>Categoria</th>
            <th>Título</th>
            <th>Contenido</th>
            <th>Posteado</th>
            <th>Creación</th>
            <th>Actualización</th>
            <th width="150px">Acciones</th>

        </tr>
        @foreach ($posts as $post)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $post->category->title }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->state === 'no_post' ? 'No' : 'Si'}}</td>
                <td>{{ $post->created_at->format('d-m-Y')  }}</td>
                <td>{{ $post->updated_at->format('d-m-Y') }}</td>
                <td>
                    <form class="flex" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        <a class="btn-action" href="{{ route('posts.show', $post->id) }}"><span
                                class="btn-action--view"></span></a>

                        @can('editar-post')
                            <a class="btn-action" href="{{ route('posts.edit', $post->id) }}"><span
                                    class="btn-action--edit"></span></a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('borrar-post')
                            <button type="submit" class="btn-action"><span class="btn-action--delete"></span></button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="pull-right">
        @can('crear-post')
            <a class="btn btn-ui-primary" href="{{ route('posts.create') }}">Crear post</a>
        @endcan
    </div>

    {!! $posts->links() !!}
@endsection
