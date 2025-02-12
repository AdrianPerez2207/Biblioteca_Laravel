<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Libro extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;
    protected $fillable = [
        'titulo',
        'isbn',
        'portada',
        'anio_publicacion',
        'estado',
        'autor_id',
        'ubicacion_id'
    ];

    public function autor(): BelongsTo
    {
        return $this->belongsTo(Autor::class);
    }
    public function ubicacion(): BelongsTo
    {
        return $this->belongsTo(Ubicacion::class);
    }
}
