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
            'password' => Hash::make('password'), // Contraseña: password
        ]);

        User::create([
            'name' => 'Usuario1',
            'email' => 'usuario1@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Usuario2',
            'email' => 'usuario2@example.com',
            'password' => Hash::make('password'),
        ]);

        // Llamar al Seeder de Arcos
        $this->call(ArcoSeeder::class);
    }
}
