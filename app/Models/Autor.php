<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Autor extends Model
{
    /** @use HasFactory<\Database\Factories\AutorFactory> */
    use HasFactory;
    protected $table = 'autores';

    protected $fillable = [
        'nombre',
        'nacionalidad',
        'fecha_nacimiento',
        'biografia',
        'codigoDewey'
    ];

    public function libros(): HasMany
    {
        return $this->hasMany(Libro::class);
    }

}
