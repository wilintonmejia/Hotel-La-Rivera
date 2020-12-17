<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
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
                'DNI' => '16647846',
                'nombres' => 'Edgar Bejarano',
                'genero' => 'M',
                'Domicilio' => 'Calle 25 No. 7 Este 84, Finca Lope -Vía La Carolina, Pasto, Nariño',
                'Telefono' => '3185539793',
                'foto' => '1.jpg',
            ],
            [
                'id' => 2,
                'DNI' => '28918460',
                'nombres' => 'Jesús Delgado',
                'genero' => 'M',
                'Domicilio' => 'Carrera 5 No. 9 -125, Garagoa, Boyacá',
                'Telefono' => '3185857825',
                'foto' => '2.jpg',
            ],
            [
                'id' => 3,
                'DNI' => '36998048',
                'nombres' => 'Paola Beltrán',
                'genero' => 'F',
                'Domicilio' => 'Carrera 7 No.1A-52, Gachalá, Cundinamarca',
                'Telefono' => '3043479843',
                'foto' => '3.jpg',
            ],
            [
                'id' => 4,
                'DNI' => '37122444',
                'nombres' => 'Alfonso Escobar',
                'genero' => 'M',
                'Domicilio' => 'Carrera 7 No. 36 - 45, Bogotá, Cundinamarca',
                'Telefono' => '3185102420',
                'foto' => '4.jpg',
            ],
            [
                'id' => 5,
                'DNI' => '80191463',
                'nombres' => 'Erika Trejo',
                'genero' => 'F',
                'Domicilio' => 'Cra 25 No. 25-101 Avenida Ocala, Sincelejo, Sucre',
                'Telefono' => '3188413711',
                'foto' => '5.jpg',
            ],
            [
                'id' => 6,
                'DNI' => '94499876',
                'nombres' => 'Silvana Cuastumal',
                'genero' => 'F',
                'Domicilio' => 'Carrera 23 # 37 - 63, Bucaramanga, Santander',
                'Telefono' => '3206115992',
                'foto' => '6.jpg',
            ],
            [
                'id' => 7,
                'DNI' => '59652555',
                'nombres' => 'Cristina López',
                'genero' => 'F',
                'Domicilio' => 'Carrera 1 No 22 – 96, Quibdó, Chocó',
                'Telefono' => '3174767020',
                'foto' => '7.jpg',
            ],
            [
                'id' => 8,
                'DNI' => '1004678285',
                'nombres' => 'Ignacio Córdoba',
                'genero' => 'M',
                'Domicilio' => 'Cra. 17 14-85, Mocoa, Putumayo',
                'Telefono' => '3115890910',
                'foto' => '8.jpg',
            ],
            [
                'id' => 9,
                'DNI' => '41108397',
                'nombres' => 'Miguel Romero',
                'genero' => 'M',
                'Domicilio' => 'Avenida Colombia Calle 16 No. 10 – 27, Magangué, Bolívar',
                'Telefono' => '3127327553',
                'foto' => '9.jpg',
            ],
            [
                'id' => 10,
                'DNI' => '1085948548',
                'nombres' => 'César Torres',
                'genero' => 'M',
                'Domicilio' => 'Calle 66 No. 54 -43, Barranquilla, Atlántico',
                'Telefono' => '3178077344',
                'foto' => '10.jpg',
            ],
            [
                'id' => 11,
                'DNI' => '27381859',
                'nombres' => 'Lorena Trejo',
                'genero' => 'F',
                'Domicilio' => 'Calle 70 No 11A- 24, Bogotá, Cundinamarca',
                'Telefono' => '3147497529',
                'foto' => '11.jpg',
            ],
            [
                'id' => 12,
                'DNI' => '1001987426',
                'nombres' => 'Oswaldo Jimenez',
                'genero' => 'M',
                'Domicilio' => 'Av. Ferrocarril con 44 Esquina, Ibagué, Tolima',
                'Telefono' => '3214674020',
                'foto' => '12.jpg',
            ],
            [
                'id' => 13,
                'DNI' => '37010312',
                'nombres' => 'Orlando Cabrera',
                'genero' => 'M',
                'Domicilio' => 'Calle 46 con Avenida de las Américas, Pereira, Risaralda',
                'Telefono' => '3168440303',
                'foto' => '13.jpg',
            ],
            [
                'id' => 14,
                'DNI' => '87718706',
                'nombres' => 'Joaquín Patarroyo',
                'genero' => 'M',
                'Domicilio' => 'Carrera 1 No. 60-79, Neiva, Huila',
                'Telefono' => '3186029980',
                'foto' => '14.jpg',
            ],
            [
                'id' => 15,
                'DNI' => '1061822626',
                'nombres' => 'Alejandra Figueroa',
                'genero' => 'F',
                'Domicilio' => 'Carrera 65 No. 44 A - 32, Sector de Naranjal, Medellín , Antioquia',
                'Telefono' => '3163835030',
                'foto' => '15.jpg',
            ],
            [
                'id' => 16,
                'DNI' => '1085926964',
                'nombres' => 'Mónica Villarreal',
                'genero' => 'F',
                'Domicilio' => 'Av. Del Libertador No. 32 - 201 Barrio Tayrona, Santa Marta, Magdalena',
                'Telefono' => '3015155923',
                'foto' => '16.jpg',
            ],
            [
                'id' => 17,
                'DNI' => '1087202151',
                'nombres' => 'Héctor Murillo',
                'genero' => 'M',
                'Domicilio' => 'Cra 21 No. 21A - 44, San Marcos, Sucre',
                'Telefono' => '3152592810',
                'foto' => '17.jpg',
            ],
            [
                'id' => 18,
                'DNI' => '1143839585',
                'nombres' => 'Ruby Obando',
                'genero' => 'F',
                'Domicilio' => 'Carrera 23 No. 18- 31, Yopal, Casanare',
                'Telefono' => '3177202971',
                'foto' => '18.jpg',
            ],
            [
                'id' => 19,
                'DNI' => '98337894',
                'nombres' => 'Elizabeth Zuluaga',
                'genero' => 'F',
                'Domicilio' => 'Carrera 9 No. 9 - 88, Valledupar, Cesar',
                'Telefono' => '3132224652',
                'foto' => '19.jpg',
            ],
            [
                'id' => 20,
                'DNI' => '1057305581',
                'nombres' => 'María Osorio',
                'genero' => 'F',
                'Domicilio' => 'Cra 35 No 25-57 Barrio San Benito, Villavicencio, Meta',
                'Telefono' => '3168158918',
                'foto' => '20.jpg',
            ]
        ];
        DB::table('cliente')->insert($datos);
    }
}
