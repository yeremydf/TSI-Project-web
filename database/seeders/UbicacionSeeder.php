<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ubicaciones;

class UbicacionSeeder extends Seeder
{
    public function run(): void
    {
        Ubicaciones::create(['letra_librero' => 'A']);
        Ubicaciones::create(['letra_librero' => 'B']);
        Ubicaciones::create(['letra_librero' => 'C']);
    }
}
