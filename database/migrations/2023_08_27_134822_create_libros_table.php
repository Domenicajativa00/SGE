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
            $table->string('titulo')->nullable();
            $table->unsignedbigInteger('id_coleccion');
            $table->string('isbn');
            $table->unsignedBigInteger('estado');
            $table->timestamps();
            $table->foreign('id_coleccion')->references('id')->on('colecciones')->onDelete('set null');
            $table->foreign('estado')->references('id')->on('estado')->onDelete('set null');
            
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
