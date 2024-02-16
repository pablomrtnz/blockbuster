@extends('layouts.master')

@section('title', 'Eliminar Pelicula')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Eliminar Pelicula</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">¿Estás seguro que deseas eliminar la pelicula?</h5>
                    <p class="card-text"><strong>Titulo:</strong> {{ $peliculas->title }}</p>
                    <p class="card-text"><strong>Año:</strong> {{ $peliculas->year }}</p>
                    <form action="{{ route('peliculas.destroy', $peliculas->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        <a href="{{ route('peliculas.peliculas') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
