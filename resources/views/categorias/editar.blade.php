@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Categoría</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>Todos los campos son obligatorios</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{$error}}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif


                        <form action="{{ route('categorias.update',$categoria->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="nombre_categoria">Nombre</label>
                                        <input type="text" name="nombre_categoria" class="form-control" value="{{ $categoria->nombre_categoria }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="descripcion_categoria">Descripción</label>
                                        <input type="text" name="descripcion_categoria" class="form-control" value="{{ $categoria->descripcion_categoria }}">
                                    </div>
                                </div>                                
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
