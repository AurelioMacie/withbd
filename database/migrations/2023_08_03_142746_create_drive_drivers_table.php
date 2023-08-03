<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriveDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drive_drivers', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado')->nullable();
            $table->foreignId('veiculo_id')->references('id')->on('drives')->onDelete('cascade')->nullable();
            $table->foreignId('motorista_id')->references('id')->on('drivers')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('drive_drivers');
    }
}
