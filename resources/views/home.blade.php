@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card-dashboard">
                                        <div class="card-dashboard__content">
                                            <div class="card-dashboard__content__icon-user-dash"></div>
                                            <h5>Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $cant_users = User::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-users f-left"></i><span>{{ $cant_users }}</span></h2>
                                            <p class="mb-0 text-right"><a href="/users" class="text-blue">Ver más</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-md-4 col-xl-4">
                                    <div class="card-dashboard">
                                        <div class="card-dashboard__content">
                                            <div class="card-dashboard__content__icon-role-dash"></div>
                                            <h5>Roles</h5>
                                            @php
                                                use Spatie\Permission\Models\Role;
                                                $cant_roles = Role::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-user-lock f-left"></i><span>{{ $cant_roles }}</span></h2>
                                            <p class="mb-0 text-right"><a href="/roles" class="text-blue">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-xl-4">
                                    <div class="card-dashboard">
                                        <div class="card-dashboard__content">
                                            <div class="card-dashboard__content__icon-category-dash"></div>
                                            <h5>Categorias</h5>
                                            @php
                                                use App\Models\Category;
                                                $cant_categories = Category::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-blog f-left"></i><span>{{ $cant_categories }}</span></h2>
                                            <p class="mb-0 text-right"><a href="/categories" class="text-blue">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-xl-4 mt-16" >
                                    <div class="card-dashboard">
                                        <div class="card-dashboard__content">
                                            <div class="card-dashboard__content__icon-post-dash"></div>
                                            <h5>Posts</h5>
                                            @php
                                                use App\Models\Post;
                                                $cant_posts = Post::count();
                                            @endphp
                                            <h2 class="text-right"><i
                                                    class="fa fa-blog f-left"></i><span>{{ $cant_posts }}</span></h2>
                                            <p class="mb-0 text-right"><a href="/posts" class="text-blue">Ver más</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
