<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Arco;


class ArcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array de información de arcos para usar como ejemplos
        $arcos = [
            [
                'nombre' => 'Arco Longbow Tradicional',
                'descripcion' => 'Un arco largo y elegante, utilizado durante siglos en batallas y cacerías.',
                'tipo' => 'Longbow',
                'imagen' => '/arcos/longbow_tradicional.jpg',
            ],
            [
                'nombre' => 'Arco Recurvo Moderno',
                'descripcion' => 'Un arco con curvas en los extremos, ideal para competiciones y práctica.',
                'tipo' => 'Recurvo',
                'imagen' => '/arcos/recurvo_moderno.jpg',
            ],
            [
                'nombre' => 'Arco Compuesto de Precisión',
                'descripcion' => 'Un arco con poleas y mecanismos avanzados para máxima precisión.',
                'tipo' => 'Compuesto',
                'imagen' => '/arcos/compuesto_precision.jpg',
            ],
            [
                'nombre' => 'Arco Mongol',
                'descripcion' => 'Un arco corto y potente, utilizado por los jinetes mongoles en batallas.',
                'tipo' => 'Mongol',
                'imagen' => '/arcos/arco_mongol.jpg',
            ],
            [
                'nombre' => 'Arco de Madera Artesanal',
                'descripcion' => 'Un arco hecho a mano con maderas finas, perfecto para coleccionistas.',
                'tipo' => 'Artesanal',
                'imagen' => '/arcos/arco_artesanal.jpg',
            ],
            [
                'nombre' => 'Arco Estándar',
                'descripcion' => 'Un arco versátil y fácil de usar, ideal para principiantes.',
                'tipo' => 'Estándar',
                'imagen' => '/arcos/arco_estandar.jpg', 
            ],
            [
                'nombre' => 'Arco Olímpico',
                'descripcion' => 'Un arco de alta gama utilizado en competiciones olímpicas.',
                'tipo' => 'Olímpico',
                'imagen' => '/arcos/arco_olimpico.jpg', 
            ],
            [
                'nombre' => 'Arco de Fantasía Élfico',
                'descripcion' => 'Un arco inspirado en la fantasía, con diseños elegantes y detallados.',
                'tipo' => 'Fantasía',
                'imagen' => '/arcos/arco_elfico.jpg',
            ],
        ];

        foreach ($arcos as $arco) {
            Arco::create($arco);
        }
    }
}
