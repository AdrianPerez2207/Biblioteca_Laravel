<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LibroISBNResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'isbn' => $this->isbn,
            'portada' => $this->portada,
            'anio_publicacion' => $this->anio_publicacion,
            'estado' => $this->estado,
            'autor' => $this->autor,
            'ubicacion' => $this->ubicacion
        ];
    }
}
