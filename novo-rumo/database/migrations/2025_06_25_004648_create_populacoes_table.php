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
     Schema::create('populacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cidade_id')->constrained('cidades')->onDelete('cascade');
            $table->integer('ano');
            $table->integer('populacao')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('populacoes');
    }
};
