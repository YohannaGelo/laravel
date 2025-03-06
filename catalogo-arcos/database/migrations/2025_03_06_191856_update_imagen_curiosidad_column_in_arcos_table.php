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
        Schema::table('arcos', function (Blueprint $table) {
            $table->text('imagen_curiosidad')->nullable()->change(); // Cambiar a tipo TEXT
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('arcos', function (Blueprint $table) {
            $table->string('imagen_curiosidad', 255)->nullable()->change(); 
        });
    }
};
