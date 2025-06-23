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
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->integer('populacao')->nullable(false);
            $table->string('custo_vida'); /** Acessível, Moderado, Elevado, Altamente Dispendioso */
            $table->string('atrativos')->nullable(false);
            $table->string('descricao')->nullable(false);
            $table->string('identificador_alias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cidades');
    }
};
