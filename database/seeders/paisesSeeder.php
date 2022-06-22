<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class paisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([
            'nombre' => 'Colombia',
            'capital' => 'Bogotá',
            'idioma' => 'Español',
            'poblacion' => '51.196.598',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('paises')->insert([
            'nombre' => 'China',
            'capital' => 'Pekín',
            'idioma' => 'Chino Mandarín',
            'poblacion' => '1,439,323,774',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Estados Unidos',
            'capital' => 'Washington, D.C.',
            'idioma' => 'Inglés',
            'poblacion' => '331,002,647',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Brasil',
            'capital' => 'Brasilia',
            'idioma' => 'Portugues',
            'poblacion' => '212,559,409',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Japón',
            'capital' => 'Tokio',
            'idioma' => 'Japonés',
            'poblacion' => '126,476,458',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'México',
            'capital' => 'Ciudad de México',
            'idioma' => 'Español',
            'poblacion' => '128,932,753',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Alemania',
            'capital' => 'Berlín',
            'idioma' => 'Alemán',
            'poblacion' => '83,783,945',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'España',
            'capital' => 'Madrid',
            'idioma' => 'Español',
            'poblacion' => '46,754,783',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Argentina',
            'capital' => 'Buenos Aires',
            'idioma' => 'Español',
            'poblacion' => '45,195,777',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('paises')->insert([
            'nombre' => 'Perú',
            'capital' => 'Lima',
            'idioma' => 'Español',
            'poblacion' => '32,971,846',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
