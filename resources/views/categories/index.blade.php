@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-24">
                <h2>Categorias</h2>
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
            <th>Título</th>
            <th>Contenido</th>
            <th width="150px">Acciones</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <form class="flex" action="{{ route('categories.destroy', $category->id) }}" method="POST">
                        <a class="btn-action" href="{{ route('categories.show', $category->id) }}"><span
                                class="btn-action--view"></span></a>

                        @can('editar-category')
                            <a class="btn-action" href="{{ route('categories.edit', $category->id) }}"><span
                                    class="btn-action--edit"></span></a>
                        @endcan

                        @csrf
                        @method('DELETE')
                        @can('borrar-category')
                            <button type="submit" class="btn-action"><span class="btn-action--delete"></span></button>
                        @endcan
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="pull-right">
        @can('crear-category')
            <a class="btn btn-ui-primary" href="{{ route('categories.create') }}">Crear categoria</a>
        @endcan
    </div>

    {!! $categories->links() !!}
@endsection
