<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('educacaos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('cidade_id')->constrained('cidades')->onDelete('cascade');
        $table->integer('ano');
        $table->decimal('taxa_escolarizacao', 5, 2);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educacoes');
    }
};
