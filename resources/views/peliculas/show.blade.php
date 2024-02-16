@extends('layouts.master')

@section('title', 'Detalles de la Pelicula')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Detalles de la Pelicula</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $peliculas->title }}</h5>
                    <p class="card-text">{{ $peliculas->year }}</p>
                    <p class="card-text"><strong>Synopsis:</strong> {{ $peliculas->synopsis }}</p>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('peliculas.edit', $peliculas->id) }}" class="btn btn-primary">Editar Pelicula</a>
                <a href="{{ route('peliculas.confirmDelete', $peliculas->id) }}" class="btn btn-danger">Eliminar Pelicula</a>
                <a href="{{ route('peliculas.download', ['id' => $peliculas->id]) }}" class="btn btn-primary">Descargar (JSON)</a>
                <a href="{{ route('peliculas.peliculas') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection