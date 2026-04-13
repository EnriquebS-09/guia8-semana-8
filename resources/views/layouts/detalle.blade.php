@extends('layouts.app')

@section('contenido')
    <div class="card shadow-sm">
        <div class="card-body">
            <h2>{{ $curso['nombre'] }}</h2>
            <p class="mt-3">{{ $curso['descripcion'] }}</p>
            <p><strong>Duración:</strong> {{ $curso['duracion'] }}</p>
            <p><strong>Precio:</strong> {{ $curso['precio'] }}</p>

            <a href="{{ route('cursos') }}" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>
@endsection