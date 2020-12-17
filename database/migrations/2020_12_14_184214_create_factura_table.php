<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigInteger('CodigoF')->unsigned()->autoIncrement(); 
            $table->bigInteger('Numero')->unsigned();
            $table->bigInteger('cliente')->unsigned();
            $table->bigInteger('formaPago')->unsigned();
            $table->date('Entrada');
            $table->date('Salida')->nullable();
            $table->double('Total')->nullable();
            $table->foreign('Numero')
                ->references('Numero')
                ->on('habitacion')
                ->onDelete('cascade');
            $table->foreign('cliente')
                ->references('id')
                ->on('cliente')
                ->onDelete('cascade');
            $table->foreign('formaPago')
                ->references('id')
                ->on('formaPago')
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
        Schema::dropIfExists('factura');
    }
}
