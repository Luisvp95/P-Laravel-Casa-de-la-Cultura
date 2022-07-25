<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contenido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigincrements('id');
            $table->string('nombre');
            $table->biginteger('curso_id')->unsigned();
            $table->timestamps();
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete("cascade");
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
}
