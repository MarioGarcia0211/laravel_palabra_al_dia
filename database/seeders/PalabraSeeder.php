<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PalabraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $palabras = [
            'arbol', 'bravo', 'canto', 'dedos', 'exito',
            'falda', 'gatos', 'hondo', 'islas', 'joven',
            'karma', 'lugar', 'mitos', 'nacer', 'oruga',
            'perro', 'queso', 'raton', 'selva', 'trago'
        ];

        foreach ($palabras as $palabra) {
            DB::table('palabras')->insert([
                'palabra' => $palabra
            ]);
        }
    }
}
