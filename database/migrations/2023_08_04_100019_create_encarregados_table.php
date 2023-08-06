<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncarregadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encarregados', function (Blueprint $table) {
            $table->id();
            $table->string('parentesco')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->foreignId('estudante_id')->references('id')->on('estudantes')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('encarregados');
    }
}
