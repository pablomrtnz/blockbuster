@extends('layouts.master')

@section('title', isset($peliculas) ? 'Modificar Pelicula' : 'Crear Pelicula')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>{{ isset($peliculas) ? 'Modificar Pelicula' : 'Crear Pelicula' }}</h1>
            <form action="{{ isset($peliculas) ? route('peliculas.update', $peliculas->id) : route('peliculas.store') }}" method="POST">
                @csrf
                @if (isset($peliculas))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Titulo:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ isset($peliculas) ? $peliculas->title : '' }}">
                </div>
                <div class="form-group">
                    <label for="director">Director:</label>
                    <textarea class="form-control" id="director" name="director" rows="3">{{ isset($peliculas) ? $peliculas->director : '' }}</textarea>
                </div>
                <div class="form-group">
                    <label for="year">Año:</label>
                    <input type="text" class="form-control" id="year" name="year" value="{{ isset($peliculas) ? $peliculas->year : '' }}">
                </div>
                <div class="form-group">
                    <label for="poster">Poster:</label>
                    <input type="text" class="form-control" id="poster" name="poster" value="{{ isset($peliculas) ? $peliculas->poster : '' }}">
                </div>
                <div class="form-group">
                    <label for="rented">Rented:</label>
                    <input type="text" class="form-control" id="rented" name="rented" value="{{ isset($peliculas) ? $peliculas->rented : '' }}">
                </div>
                <div class="form-group">
                    <label for="synopsis">Sinopsis:</label>
                    <input type="text" class="form-control" id="synopsis" name="synopsis" value="{{ isset($peliculas) ? $peliculas->synopsis : '' }}">
                </div>
                <button type="submit" class="btn btn-primary">{{ isset($peliculas) ? 'Modificar' : 'Crear' }} Pelicula</button>
                <a href="{{ route('peliculas.peliculas') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
@endsection
