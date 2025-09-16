<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    public function run(): void
    {
        Autor::create(['nom_autor' => 'Gabriel García Márquez']);
        Autor::create(['nom_autor' => 'Isabel Allende']);
        Autor::create(['nom_autor' => 'J.K. Rowling']);
    }
}