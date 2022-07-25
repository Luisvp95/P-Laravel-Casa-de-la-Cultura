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
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigincrements('id');
            $table->string('nombre');
            $table->string('editorial');
            $table->string('anyo');
            $table->biginteger('stock');
            $table->biginteger('categoria_id')->unsigned();
            $table->biginteger('autor_id')->unsigned();
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('autor_id')->references('id')->on('autors')->onDelete("cascade");
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
