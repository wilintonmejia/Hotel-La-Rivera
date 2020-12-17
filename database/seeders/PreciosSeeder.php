<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos=[
            [
                'id' => 1,
                'Tipo' => 'Sencilla',
                'precio' => 40000,
            ],
            [
                'id' => 2,
                'Tipo' => 'Doble',
                'precio' => 70000,
            ],
            [
                'id' => 3,
                'Tipo' => 'Cuadruple',
                'precio' => 120000,
            ],
            [
                'id' => 4,
                'Tipo' => 'Matrimonial',
                'precio' => 90000,
            ],
            [
                'id' => 5,
                'Tipo' => 'Familiar',
                'precio' => 160000,
            ],
            [
                'id' => 6,
                'Tipo' => 'Suite',
                'precio' => 100000,
            ]
        ];
    DB::table('precio')->insert($datos);    
    }
}
