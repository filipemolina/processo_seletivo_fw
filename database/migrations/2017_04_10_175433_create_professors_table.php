<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('cpf', 15);
            $table->date('nascimento');
            $table->string('mae', 100);
            $table->string('pai', 100);
            $table->string('rg', 12);
            $table->string('orgao_emissor', 100);
            $table->string('uf_orgao_emissor', 2);
            $table->date('data_emissao', 10);
            $table->string('nacionalidade', 50);
            $table->string('naturalidade', 50);
            $table->char('sexo', 1);
            $table->string('estado_civil', 100);
            $table->string('cor_raca', 50);
            $table->string('escolaridade', 100);
            $table->string('formacao', 100);
            $table->string('cep', 9);
            $table->string('logradouro');
            $table->string('numero', 10);
            $table->string('complemento');
            $table->string('bairro');
            $table->string('município');
            $table->string('uf', 2);
            $table->string('telefone', 20);
            $table->string('telefone2', 20);
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professors');
    }
}
