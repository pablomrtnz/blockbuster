@extends('layouts.master')

@section('title', 'Todas las Peliculas')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Todas las Peliculas</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Director</th>
                        <th>Año</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peliculas as $pelicula)
                    <tr>
                        <td>{{ $pelicula->id }}</td>
                        <td>{{ $pelicula->title }}</td>
                        <td>{{ $pelicula->director }}</td>
                        <td>{{ $pelicula->year }}</td>
                        <td>
                            <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-primary">Detalles</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{ route('peliculas.downloadAll') }}" class="btn btn-primary">Descargar Todas las peliculas (JSON)</a>
@endsection