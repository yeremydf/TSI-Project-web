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
        Schema::table('libros', function (Blueprint $table) {
            
            $table->foreignId('ubicacion_id')->nullable()->constrained('ubicaciones');
            $table->unsignedBigInteger('genero_id')->nullable()->after('titulo');
            $table->foreign('genero_id')->references('id')->on('generos_literarios')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libros', function (Blueprint $table) {
            //
        });
    }
};
