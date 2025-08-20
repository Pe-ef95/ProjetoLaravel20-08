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
        Schema::create('cadastro', function (Blueprint $table) {
            $table->id();
            //define a PK
            $table->string('nome');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('cnpj');
            $table->timestamps();
            //cria 2 colunas para guardar a data e hora de criação de um registro e sua ultima modificação
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro');
    }
};
