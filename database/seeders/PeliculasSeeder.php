<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelicula;


class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula = new Pelicula();
        $pelicula -> id = 1;
        $pelicula -> title = 'El padrino';
        $pelicula -> year = '1972';
        $pelicula -> director = 'Francis Ford Coppola';
        $pelicula -> poster ='https://static.posters.cz/image/750webp/129584.webp';
        $pelicula -> rented = 0;
        $pelicula -> synopsis = 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York...';
        $pelicula -> created_at = '2024-02-02 09:36:23';
        $pelicula -> updated_at = '2024-02-02 09:36:23';
        $pelicula -> save(); 

    }
    
}