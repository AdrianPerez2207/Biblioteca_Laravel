<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('isbn')->unique();
            $table->string('portada', 500);
            $table->integer('anio_publicacion');
            $table->enum('estado', ['disponible', 'prestado', 'extraviado']);
            //En constrained le pasamos la tabla a la que hace referencia y la columna.
            $table->foreignId('autor_id')->constrained('autores', 'id')->cascadeOnDelete();
            $table->foreignId('ubicacion_id')->constrained('ubicaciones', 'id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
