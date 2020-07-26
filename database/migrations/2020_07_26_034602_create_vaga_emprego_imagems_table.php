<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagaEmpregoImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaga_emprego_imagem', function (Blueprint $table) {
            $table->bigIncrements('id');

            /* dados */
            $table->string('url');
            $table->boolean('principal');

            /* relacionamentos */
            $table->unsignedBigInteger('vaga_emprego_id');

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
        Schema::dropIfExists('vaga_emprego_imagem');
    }
}
