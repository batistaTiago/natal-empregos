<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGCVagaEmpregosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('g_c_vaga_emprego', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('titulo');
            $table->string('sub_titulo');
            $table->unsignedBigInteger('regime_contratacao_id');
            $table->float('remuneracao');

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
        Schema::dropIfExists('g_c_vaga_emprego');
    }
}
