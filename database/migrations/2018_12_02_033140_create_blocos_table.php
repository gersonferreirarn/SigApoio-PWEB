<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('predio_id')->unsigned();
            $table->string('descricao', 120);
            $table->text('comentario');

            $table->foreign('predio_id')
                ->references('id')->on('predios')
                ->onDelete('cascade');
            #$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blocos');
    }
}
