<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class HabitacionesSeeder extends Seeder
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
                'Numero' => 1,
                'descripcion' => 'Habitacion de 10 mts cuadrados, vista a la ciudad y al mar, cama individual, un ventilador y baño privado',
                'numCamas' => 1,
                'foto' => '1.jpg',
                'precio_id' => 1,
            ],
            [
                'Numero' => 2,
                'descripcion' => 'Habitacion de 10 mts cuadrados, vista a la ciudad y al mar, cama individual, un ventilador y baño privado',
                'numCamas' => 1,
                'foto' => '2.jpg',
                'precio_id' => 1,
            ],
            [
                'Numero' => 3,
                'descripcion' => 'Habitacion de 10 mts cuadrados, vista a la ciudad y al mar, cama individual, un ventilador y baño privado',
                'numCamas' => 1,
                'foto' => '3.jpg',
                'precio_id' => 1,
            ],
            [
                'Numero' => 4,
                'descripcion' => 'Habitacion de 10 mts cuadrados, vista a la ciudad y al mar, cama individual, un ventilador y baño privado',
                'numCamas' => 1,
                'foto' => '4.jpg',
                'precio_id' => 1,
            ],
            [
                'Numero' => 5,
                'descripcion' => 'Habitacion de 10 mts cuadrados, vista a la ciudad y al mar, cama individual, un ventilador y baño privado',
                'numCamas' => 1,
                'foto' => '5.jpg',
                'precio_id' => 1,
            ],
            [
                'Numero' => 6,
                'descripcion' => 'Habitacion de 16 mts cuadrados, vista al mar, cama compartida, un ventilador y baño compartido',
                'numCamas' => 1,
                'foto' => '6.jpg',
                'precio_id' => 2,
            ],
            [
                'Numero' => 7,
                'descripcion' => 'Habitacion de 16 mts cuadrados, vista al mar, cama compartida, un ventilador y baño compartido',
                'numCamas' => 1,
                'foto' => '7.jpg',
                'precio_id' => 2,
            ],
            [
                'Numero' => 8,
                'descripcion' => 'Habitacion de 16 mts cuadrados, vista al mar, camas individuales, un ventilador y baño compartido',
                'numCamas' => 2,
                'foto' => '8.jpg',
                'precio_id' => 2,
            ],
            [
                'Numero' => 9,
                'descripcion' => 'Habitacion de 16 mts cuadrados, vista al mar, camas individuales, un ventilador y baño compartido',
                'numCamas' => 2,
                'foto' => '9.jpg',
                'precio_id' => 2,
            ],
            [
                'Numero' => 10,
                'numCamas' => 4,
                'descripcion' => 'Habitacion de 25 mts cuadrados, vista a la ciudad , camas individuales, dos ventiladores y baño compartido',
                'foto' => '10.jpg',
                'precio_id' => 3,
            ],
            [
                'Numero' => 11,
                'numCamas' => 4,
                'descripcion' => 'Habitacion de 25 mts cuadrados, vista a la ciudad , camas individuales, dos ventiladores y baño compartido',
                'foto' => '11.jpg',
                'precio_id' => 3,
            ],
            [
                'Numero' => 12,
                'numCamas' => 4,
                'descripcion' => 'Habitacion de 25 mts cuadrados, vista a la ciudad , camas individuales, dos ventiladores y baño compartido',
                'foto' => '12.jpg',
                'precio_id' => 3,
            ],
            [
                'Numero' => 13,
                'descripcion' => 'Habitacion de 40 mts cuadrados, vista al mar, cama compartida con camas individuales para niños, tres ventiladores y baño compartido',
                'numCamas' => 7,
                'foto' => '13.jpg',
                'precio_id' => 5,
            ],

            [
                'Numero' => 14,
                'descripcion' => 'Habitacion de 40 mts cuadrados, vista al mar, cama compartida con camas individuales para niños, tres ventiladores y baño compartido',
                'numCamas' => 7,
                'foto' => '14.jpg',
                'precio_id' => 5,
            ],
            [
                'Numero' => 15,
                'descripcion' => 'Habitacion de 16 mts cuadrados con terraza, vista a la ciudad y al mar, cama compartida, dos ventiladores y baño compartido',
                'numCamas' => 1,
                'foto' => '15.jpg',
                'precio_id' => 4,
            ],
            [
                'Numero' => 16,
                'descripcion' => 'Habitacion de 16 mts cuadrados con terraza, vista a la ciudad y al mar, cama compartida, dos ventiladores y baño compartido',
                'numCamas' => 1,
                'foto' => '16.jpg',
                'precio_id' => 4,
            ],
            [
                'Numero' => 17,
                'descripcion' => 'Habitacion de 16 mts cuadrados con terraza, vista a la ciudad y al mar, cama compartida, dos ventiladores y baño compartido',
                'numCamas' => 1,
                'foto' => '17.jpg',
                'precio_id' => 4,
            ],
            [
                'Numero' => 18,
                'descripcion' => 'Habitacion de 16 mts cuadrados con terraza, vista a la ciudad y al mar, cama individual, dos ventiladores y baño privado',
                'numCamas' => 1,
                'foto' => '18.jpg',
                'precio_id' => 6,
            ],
            [
                'Numero' => 19,
                'descripcion' => 'Habitacion de 16 mts cuadrados con terraza, vista a la ciudad y al mar, cama individual, dos ventiladores y baño privado',
                'numCamas' => 1,
                'foto' => '19.jpg',
                'precio_id' => 6,
            ],
            [
                'Numero' => 20,
                'descripcion' => 'Habitacion de 16 mts cuadrados con terraza, vista a la ciudad y al mar, cama individual, dos ventiladores y baño privado',
                'numCamas' => 1,
                'foto' => '20.jpg',
                'precio_id' => 6,
            ]
        ];
        DB::table('habitacion')->insert($datos);
    }
}
