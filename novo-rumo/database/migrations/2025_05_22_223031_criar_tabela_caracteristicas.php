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
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao')->nullable(false);
            $table->integer('avaliacao')->nullable(false);  // 1 = Positiva; 0 = Negativa;
            $table->integer('situacao')->default(1)->nullable(false);  // 1 = Ativo; 0 = Inativo;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caracteristicas');
    }
};
