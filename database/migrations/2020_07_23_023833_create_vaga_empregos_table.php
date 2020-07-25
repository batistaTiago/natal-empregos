<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagaEmpregosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaga_emprego', function (Blueprint $table) {
            $table->bigIncrements('id');


            /* dados */
            $table->string('titulo');
            $table->string('sub_titulo');
            $table->text('descricao')->nullable();
            $table->string('observacoes')->nullable();
            $table->float('remuneracao')->nullable();
            $table->boolean('aceita_remoto')->nullable();
            
            
            /* controle */
            $table->boolean('ativa')->default(false);

            /* relacionamentos */
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('regime_contratacao_id');


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
        Schema::dropIfExists('vaga_emprego');
    }
}
