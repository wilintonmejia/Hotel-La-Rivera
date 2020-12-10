<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->bigInteger('Numero')->unsigned()->autoIncrement();
            $table->string('descripcion', 255);
            $table->bigInteger('numCamas');
            $table->string('foto', 45);
            $table->bigInteger('precio_id')->unsigned();
            $table->foreign('precio_id')
                ->references('id')
                ->on('precio')
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
        Schema::dropIfExists('habitacion');
    }
}
