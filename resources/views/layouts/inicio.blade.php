@extends('layouts.app')

@section('contenido')
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container-fluid py-3">
            <h1 class="display-5 fw-bold">Bienvenido a ITCA-FEPADE</h1>
            <p class="col-md-8 fs-5">
                Explora nuestros cursos de desarrollo web y programación.
            </p>
            <a href="{{ route('cursos') }}" class="btn btn-primary btn-lg">Ver cursos</a>
        </div>
    </div>
@endsection