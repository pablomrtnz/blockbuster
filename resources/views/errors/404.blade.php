@extends('layouts.master')

@section('title', 'Error 404 - Página no encontrada')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1>Error 404 - Página no encontrada</h1>
            <p>Lo sentimos, la página que estás buscando no se pudo encontrar.</p>
            <a href="{{ route('peliculas.index') }}" class="btn btn-primary">Ir a la página principal</a>
        </div>
    </div>
@endsection