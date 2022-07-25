<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('persona_id')->unsigned();
            $table->bigInteger('libro_id')->unsigned();
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete("cascade");
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete("cascade");
        });
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
