<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class GeneroLiterario extends Model
{
    use HasFactory;
    protected $table = 'generos_literarios';
    protected $fillable = ['nombre'];

    public function libros()
    {
        return $this->hasMany(Libro::class, 'genero_id');
    }
}