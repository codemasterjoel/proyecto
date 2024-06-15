<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\cne;

class CneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cne::insert([
            ['id' => '1', 'letra' => 'V', 'cedula' => '19491796', 'apellido1' => 'ZERPA', 'apellido2' => 'GUERRERO', 'nombre1' => 'JOEL', 'nombre2' => 'ANTONIO', 'fecha_nac' => '1990-10-17', 'genero' => 'M', 'centro_id' => '51001012'],
            ['id' => '2', 'letra' => 'V', 'cedula' => '18192664', 'apellido1' => 'ZERPA', 'apellido2' => 'GUERRERO', 'nombre1' => 'JOSE', 'nombre2' => 'LEONARDO', 'fecha_nac' => '1988-09-15', 'genero' => 'M', 'centro_id' => '190202002'],
            ['id' => '3', 'letra' => 'V', 'cedula' => '20516664', 'apellido1' => 'ZERPA', 'apellido2' => 'GUERRERO', 'nombre1' => 'YULIMAR', 'nombre2' => '', 'fecha_nac' => '1988-06-21', 'genero' => 'F', 'centro_id' => '110207072']
        ]);
    }
}
