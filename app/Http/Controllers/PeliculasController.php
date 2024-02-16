<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function peliculas()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.all', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.form');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $request->validate([
            'title' => 'required|max:100',
            'year' => 'required|max:10',
            'director' => 'required|max:50',
            'poster' => 'required|max:100',
            'rented' => 'required|numeric',
            'synopsis' => 'required|max:500',
         ]);
     
         Pelicula::create([
             'title' => $request->title,
             'year' => $request->year,
             'director' => $request->director,
             'poster' => $request->poster,
             'rented' => $request->rented,
             'synopsis' => $request->synopsis,
             
         ]);
     
         return redirect()->route('peliculas.index')->with('success', 'Pelicula creada correctamente.');
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peliculas = Pelicula::findOrFail($id);
        return view('peliculas.show', compact('peliculas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peliculas = Pelicula::findOrFail($id);
        return view('peliculas.form', compact('peliculas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'year' => 'required|max:10',
            'director' => 'required|max:50',
            'poster' => 'required|max:100',
            'rented' => 'required|numeric',
            'synopsis' => 'required|max:500',
        ]);

        $peliculas = Pelicula::findOrFail($id);

        $peliculas->title = $request->title;
        $peliculas->year = $request->year;
        $peliculas->director = $request->director;
        $peliculas->poster = $request->poster;
        $peliculas->rented = $request->rented;
        $peliculas->synopsis = $request->synopsis;
        $peliculas->save();

        return redirect()->route('peliculas.index')->with('success', 'Pelicula actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peliculas = Pelicula::findOrFail($id);
        $peliculas->delete();
    
        return redirect()->route('peliculas.index')->with('success', 'Pelicula eliminada correctamente.');
    }

    public function confirmDelete($id)
    {
    $peliculas = Pelicula::findOrFail($id);
    return view('peliculas.delete', compact('peliculas'));
    }

    public function downloadAll()
    {
        $peliculas = Pelicula::all();
        $peliculasJson = $peliculas->toJson(JSON_PRETTY_PRINT);
        
        return response()->streamDownload(function () use ($peliculasJson) {
            echo $peliculasJson;
        }, 'peliculas.json');
    }

    public function download($id)
    {
        $peliculas = Pelicula::findOrFail($id);
        $peliculasJson = $peliculas->toJson(JSON_PRETTY_PRINT);
        
        return response()->streamDownload(function () use ($peliculasJson) {
            echo $peliculasJson;
        }, 'pelicula_' . $id . '.json');
    }
}