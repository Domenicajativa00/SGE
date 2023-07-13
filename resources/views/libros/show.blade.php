@extends('libros.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar libro</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('libros.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titulo:</strong>
                {{ $libro->titulo }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion del libro:</strong>
                {{ $libro->descripcion }}
            </div>
        </div>
    </div>
@endsection