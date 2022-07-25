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
        Schema::create('ventacursos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('persona_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas')->onDelete("cascade");
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
};
