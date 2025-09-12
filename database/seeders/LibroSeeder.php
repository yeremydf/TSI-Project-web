<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::create([
            'isbn' => '978-956-1234567',
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'genero' => 'Novela',
            'fecha_publicacion' => '1967-05-30',
            'stock_total' => 10,
            'stock_disponible' => 10,
        ]);

        Libro::create([
            'isbn' => '978-956-7654321',
            'titulo' => 'El Principito',
            'autor' => 'Antoine de Saint-Exupéry',
            'genero' => 'Fábula',
            'fecha_publicacion' => '1943-04-06',
            'stock_total' => 5,
            'stock_disponible' => 5,
        ]);

    }
}
