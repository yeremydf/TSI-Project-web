<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneroLiterario;

class GeneroLiterarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        GeneroLiterario::create(['nombre' => 'Novela']);
        GeneroLiterario::create(['nombre' => 'Fábula']);
        GeneroLiterario::create(['nombre' => 'Ciencia Ficción']);
        GeneroLiterario::create(['nombre' => 'Misterio']);
    }
}
