<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    public function run(): void
    {
        Autor::create(['nombre' => 'Gabriel García Márquez']);
        Autor::create(['nombre' => 'Isabel Allende']);
        Autor::create(['nombre' => 'J.K. Rowling']);
    }
}