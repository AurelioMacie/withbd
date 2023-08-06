<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoMotoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo_motoristas', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado')->nullable();
            $table->foreignId('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade')->nullable();
            $table->foreignId('motorista_id')->references('id')->on('motoristas')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('veiculo_motoristas');
    }
}
