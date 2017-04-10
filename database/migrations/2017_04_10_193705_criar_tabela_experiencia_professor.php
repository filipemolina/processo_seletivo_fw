<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaExperienciaProfessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_professor', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('experiencia_id');
            $table->unsignedInteger('professor_id');
            $table->string('instituicao');
            $table->date('conclusao');
            $table->timestamps();

            $table->foreign('experiencia_id')->references('id')->on('experiencias')->onDelete('cascade');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiencia_professor');
    }
}
