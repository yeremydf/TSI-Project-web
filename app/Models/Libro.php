<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $primaryKey = 'id_libro_interno';

    protected $fillable = [
        'isbn_libro',
        'nom_libro',
        'fecha_publicacion',
        'editorial',
        'genero_literario',
        'cantidad_disponible',
        'id_ubicacion',
        'id_detalle_autores',
        'imagen',
    ];
}
