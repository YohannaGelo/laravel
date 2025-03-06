<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuarios de prueba
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'), // Contraseña: admin
        ]);

        User::create([
            'name' => 'Pepe',
            'email' => 'pepe@gmail.com',
            'password' => Hash::make('pepe'),
        ]);

        User::create([
            'name' => 'Yohanna',
            'email' => 'yohanna@gmail.com',
            'password' => Hash::make('yohanna'),
        ]);

        // Llamar al Seeder de Arcos
        $this->call(ArcoSeeder::class);

        // Llamar al Seeder de Galería
        $this->call([
            GallerySeeder::class,
        ]);
    }
}
