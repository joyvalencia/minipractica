<?php

namespace Database\Seeders;

use App\Models\Artista;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artista::create([
            'nom' => 'Rosalía',
            'pais' => 'Espanya',
            'bio' => 'Cantant i compositora catalana.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Cazzu',
            'pais' => 'Argentina',
            'bio' => 'Rapera i compositora.',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Selena Quintanilla',
            'pais' => 'Estats Units',
            'bio' => 'Cantant i compositora Tex Mex.',
            'imatge_url' => null,
            'actiu' => false,
        ]);

        Artista::create([
            'nom' => 'Karol G',
            'pais' => 'Colombia',
            'bio' => 'Cantant',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Prince Royce',
            'pais' => 'Estats Units',
            'bio' => 'Cantant',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Farruko',
            'pais' => 'Puerto Rico',
            'bio' => 'Cantant',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Tokio Hotel',
            'pais' => 'Alemanya',
            'bio' => 'Cantants',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Vicente Fernandez',
            'pais' => 'Mexico',
            'bio' => 'Cantant i actor mexica',
            'imatge_url' => null,
            'actiu' => false,
        ]);

        Artista::create([
            'nom' => 'Pablo Alboran',
            'pais' => 'Espanya',
            'bio' => 'Cantant i actor',
            'imatge_url' => null,
            'actiu' => true,
        ]);

        Artista::create([
            'nom' => 'Shakira',
            'pais' => 'Colombia',
            'bio' => 'Cantant, compositora,ballarina',
            'imatge_url' => null,
            'actiu' => true,
        ]);




    }
}
