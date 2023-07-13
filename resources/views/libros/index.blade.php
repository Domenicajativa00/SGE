@extends('libros.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Repositorio de Editoriales</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('libros.create') }}"> Añadir nuevo libro</a>
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
            <th>#</th>
            <th>Nombre del libro</th>
            <th>Detalles del libro</th>
            <th width="280px">Estado</th>
        </tr>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->descripcion }}</td>
            <td>
                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('libros.show',$libro->id) }}">Mostrar libro</a>
    
                    <a class="btn btn-primary" href="{{ route('libros.edit',$libro->id) }}">Editar libro</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $libros->links() !!}
      
@endsection