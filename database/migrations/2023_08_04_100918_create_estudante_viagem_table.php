<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudanteViagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudante_viagem', function (Blueprint $table) {
            $table->id();
            $table->time('horaSubida')->nullable();
            $table->time('horaDescida')->nullable();
            $table->foreignId('estudante_id')->references('id')->on('estudantes')->onDelete('cascade')->nullable();
            $table->foreignId('viagem_id')->references('id')->on('viagems')->onDelete('cascade')->nullable();
	        $table->bigInteger('transferencia_viagem_id')->nullable();
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
        Schema::dropIfExists('estudante_viagem');
    }
}