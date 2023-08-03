<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudantTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studant_trips', function (Blueprint $table) {
            $table->id();
            $table->date('horaSubida')->nullable();
            $table->date('horaDescida')->nullable();
            $table->foreignId('estudante_id')->references('id')->on('students')->onDelete('cascade')->nullable();
            $table->foreignId('viagem_id')->references('id')->on('trips')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('studant_trips');
    }
}
