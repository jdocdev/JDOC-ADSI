@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Inicio</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-cps order-card">
                                    <div class="card-block">
                                        <h5>Categorías</h5>
                                        @php
                                        use App\Models\Categoria;
                                        $cant_categorias = Categoria::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fas fa-shapes f-left"></i><span>{{$cant_categorias}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/categorias" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-cps order-card">
                                    <div class="card-block">
                                        <h5>Productos</h5>
                                        @php
                                        use App\Models\Producto;
                                        $cant_productos = Producto::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fas fa-star f-left"></i><span>{{$cant_productos}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/productos" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-cps order-card">
                                    <div class="card-block">
                                        <h5>Solicitudes</h5>
                                        @php
                                        use App\Models\Solicitud;
                                        $cant_solicitudes = Solicitud::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fas fa-envelope f-left"></i><span>{{$cant_solicitudes}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/solicitudes" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-xl-6">
                                <div class="card bg-ru order-card">
                                    <div class="card-block">
                                        <h5>Roles</h5>
                                        @php
                                        use Spatie\Permission\Models\Role;
                                        $cant_roles = Role::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fas fa-user-check f-left"></i><span>{{$cant_roles}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-6">
                                <div class="card bg-ru order-card">
                                    <div class="card-block">
                                        <h5>Usuarios</h5>
                                        @php
                                        use App\Models\User;
                                        $cant_usuarios = User::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fas fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img class="col-lg-12" src="{{ asset('img/HomePage.png') }}" alt="Página de Bienvenida">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection