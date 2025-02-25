<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. Crear Migraciones
     */
    public function up(): void
    {
        // Aqui users es el nombre de la tabla que queremos
        // Crea un objeto blueprint y así creamos las columnas de la tabla
        Schema::create('users', function (Blueprint $table) {
            $table->id();   // int autoincrement
            // Nombre de las columnas van entre 'nombre'
            $table->string('name', 100); // varchar (255 por defecto))
            // $table->text('texto'); // varchar para mas de 255
            $table->string('email')->unique();  // mail único 

            // Se puede dejar vacio (nullable) sino es obligatorio
            $table->timestamp('email_verified_at')->nullable(); // guarda fechas para verificar por ejemplo un mail, en la fecha que se verifica
            $table->string('password');
            $table->rememberToken();  // varchar 100, almacena un token para mantener sesion iniciada
 
            $table->timestamps();   // 2 columnas de timestamp -> 1 fecha de cuando se ha insertado y 2 fecha de la ultima modificación
                                    //created_at - updated_up
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations. Sirve para deshacer la migración, borra la tabla
     */
    public function down(): void
    {
        //Podríamos añadir aquí alguna lógica necesaria para que ocurra al deshacer la migración
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
