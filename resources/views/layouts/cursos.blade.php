@extends('layouts.app')

@section('contenido')
<h2 class="mb-4">Listado de Cursos</h2>

<div class="row">
    @foreach ($cursos as $curso)
    <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $curso['nombre'] }}</h5>
                <p class="card-text">{{ $curso['descripcion'] }}</p>
                <p><strong>Duración:</strong> {{ $curso['duracion'] }}</p>
                <p><strong>Precio:</strong> {{ $curso['precio'] }}</p>
            </div>
            <a href="{{ route('detalle.curso', $curso['id']) }}" class="btn btn-success">
                Ver detalle
            </a>
        </div>
    </div>
    @endforeach
</div>
@endsection