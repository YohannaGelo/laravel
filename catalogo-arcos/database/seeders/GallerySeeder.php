<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Gallery::create([
            'nombre' => 'Día de tiro con arco',
            'imagen' => '/gallery/foto01.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Arco de poleas',
            'imagen' => '/gallery/foto02.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Darío Rodríguez - Arco recurvo',
            'imagen' => '/gallery/foto03.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Yohanna Gelo - Arco de poleas',
            'imagen' => '/gallery/foto04.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Alba Rodríguez -Arco estándar',
            'imagen' => '/gallery/foto05.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Yohanna Gelo - Arco olímpico',
            'imagen' => '/gallery/foto06.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Arco recurvo',
            'imagen' => '/gallery/foto07.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Yohanna Gelo - Longbow',
            'imagen' => '/gallery/foto08.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Darío Rodríguez - Arco de poleas',
            'imagen' => '/gallery/foto09.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Arco recurvo',
            'imagen' => '/gallery/foto10.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Darío Rodríguez - Puntería',
            'imagen' => '/gallery/foto11.jpg',
        ]);

        \App\Models\Gallery::create([
            'nombre' => 'Mariano Montávez - Feliz',
            'imagen' => '/gallery/foto12.jpg',
        ]);
    }
}
