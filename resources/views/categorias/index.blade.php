@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Categorías</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-categoria')
                        <a class="btn btn-warning" href="{{ route('categorias.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead>                                     
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>                          
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->id }}</td>                                
                                <td>{{ $categoria->nombre_categoria }}</td>
                                <td>{{ $categoria->descripcion_categoria }}</td>
                                <td>
                                    <form action="{{ route('categorias.destroy',$categoria->id) }}" method="POST">                                        
                                        @can('editar-categoria')
                                        <a class="btn btn-info" href="{{ route('categorias.edit',$categoria->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-categoria')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            {!! $categorias->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
