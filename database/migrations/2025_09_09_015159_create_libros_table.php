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
            $table->string('isbn',50)->unique();
            $table->string('titulo',150);
            $table->string('autor',100);
            $table->string('genero',50)->nullable();
            $table->date('fecha_publicacion')->nullable();
            $table->string('stock_total')->default(0);
            $table->string('stock_disponible')->default(0);
            $table->timestamps();
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
