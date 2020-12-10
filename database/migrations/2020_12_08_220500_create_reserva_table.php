<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Numero')->unsigned();
            $table->bigInteger('cliente')->unsigned();
            $table->date('Entrada');
            $table->date('Salida');
            $table->foreign('Numero')
                  ->references('Numero')
                  ->on('habitacion')
                  ->onDelete('cascade');
            $table->foreign('cliente')
                  ->references('id')
                  ->on('cliente')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('reserva');
    }
}
