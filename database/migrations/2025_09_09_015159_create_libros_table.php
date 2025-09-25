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
            $table->string('isbn_libro', 17)->unique();
            $table->string('titulo', 150);
            $table->unsignedBigInteger('autor_id'); 
            $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
            $table->string('editorial');  
            $table->date('fecha_publicacion')->nullable();
            $table->integer('stock_total')->default(0);
            $table->integer('stock_disponible')->default(0);
            $table->timestamps();
            $table->softDeletes(); 
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
