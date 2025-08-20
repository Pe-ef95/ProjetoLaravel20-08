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
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            //define a chave primária
            $table->integer('quantidade');
            //campo do tipo inteiro
            $table->decimal('valor_unitario', 10, 2);
            //campo decimal com até 10 numeros após a virgula e 2 antes
            $table->foreignId('cadastro_id')->constrained('cadastro')->onDelete('cascade');
            /*registra a chave estrangeira da tabela "cadastro" que seleciona automaticamente o campo 
            de chave primária da tabela referenciada, o ID, e garente que a exclusão de um registro
            na tabela "cadastro" exclua os registros nessa tabela com sua FK*/
            $table->timestamps();
            //cria 2 colunas para guardar a data e hora de criação de um registro e sua ultima modificação
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
