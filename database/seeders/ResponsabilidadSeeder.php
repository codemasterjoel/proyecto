<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Responsabilidad;

class ResponsabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Responsabilidad::insert([
            ['nombre' => 'DIRECTOR'],
            ['nombre' => 'SUBDIRECTOR'],
            ['nombre' => 'FUNCIONAMIENTO'],
            ['nombre' => 'ESPECIALISTA']
        ]);
    }
}
