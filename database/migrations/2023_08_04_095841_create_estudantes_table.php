<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('partida')->nullable();
            $table->string('destino')->nullable();
            $table->string('descricaoSolicitacao')->nullable();
            $table->string('estado')->nullable();
            $table->foreignId('rota_id')->references('id')->on('rotas')->onDelete('cascade')->nullable(true);
            $table->foreignId('veiculo_id')->references('id')->on('veiculos')->onDelete('cascade')->nullable(true);
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
        Schema::dropIfExists('estudantes');
    }
}
