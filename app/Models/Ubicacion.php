<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Termwind\Components\Li;

class Ubicacion extends Model
{
    /** @use HasFactory<\Database\Factories\UbicacionFactory> */
    use HasFactory;
    protected $table = 'ubicaciones';
    protected $fillable = [
        'biblioteca',
        'direccion',
        'numero_estanteria'
    ];

    public function libros(): HasMany
    {
        return $this->hasMany(Libro::class);
    }
}
