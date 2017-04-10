<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToProfessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professors', function (Blueprint $table) {
            $table->unsignedInteger('cargo_id');

            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professors', function (Blueprint $table) {
           $table->dropForeign('professors_cargo_id_foreign');
           $table->dropColumn('cargo_id');
        });
    }
}
