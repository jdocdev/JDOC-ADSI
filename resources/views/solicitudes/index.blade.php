@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Solicitudes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-solicitud')
                        <a class="btn btn-warning" href="{{ route('solicitudes.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead>                                     
                                    <th>Id</th>
                                    <th>Fecha Solicitud</th>
                                    <th>Asusto Solicitud</th>      
                                    <th>Descripción Solicitud</th>       
                                    <th>Id Categoría Solicitud</th>
                                    <th>Id Producto Solicitud</th>     
                                    <th>Id Usuario Solicitud</th>                        
                                    <th>Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($solicitudes as $solicitud)
                            <tr>
                                <td>{{ $solicitud->id }}</td>                                
                                <td>{{ $solicitud->fecha_solicitud }}</td>
                                <td>{{ $solicitud->titulo_solicitud }}</td>
                                <td>{{ $solicitud->descripcion_solicitud }}</td>
                                <td>{{ $solicitud->id_categoria_solicitud }}</td>
                                <td>{{ $solicitud->id_producto_solicitud }}</td>
                                <td>{{ $solicitud->id_usuario_solicitud }}</td>
                                <td>
                                    <form action="{{ route('solicitudes.destroy',$solicitud->id) }}" method="POST">                                        
                                        @can('editar-solicitud')
                                        <a class="btn btn-info" href="{{ route('solicitudes.edit',$solicitud->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-solicitud')
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
                            {!! $solicitudes->links() !!}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
