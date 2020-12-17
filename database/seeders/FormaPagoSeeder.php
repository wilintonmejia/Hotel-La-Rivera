<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FormaPagoSeeder extends Seeder
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
                'descripcion' => 'Efectivo',
            ],
            [
                'id' => 2,
                'descripcion' => 'Tarjeta Débito',
            ],
            [
                'id' => 3,
                'descripcion' => 'Tarjeta Crédito',
            ]
        ];
        DB::table('formapago')->insert($datos);
    }
}
