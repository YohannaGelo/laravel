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
        Schema::create('arcos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('tipo'); // Ej: longbow, recurvo, compuesto
            $table->string('imagen')->nullable(); // Para guardar la ruta de la imagen
            $table->text('curiosidad')->nullable(); 
            $table->string('imagen_curiosidad')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arcos');
    }
};
