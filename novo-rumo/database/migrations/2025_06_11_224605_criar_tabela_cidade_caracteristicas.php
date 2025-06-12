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
        Schema::create('cidade_caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cidade_id')->constrained()->onDelete('cascade');
            $table->foreignId('caracteristica_id')->constrained()->onDelete('cascade');
            $table->integer('quantidade_total');
            $table->timestamps();

            $table->unique(['cidade_id', 'caracteristica_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidade_caracteristicas');
    }
};
