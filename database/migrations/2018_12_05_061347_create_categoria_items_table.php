<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campus_id')->unsigned();
            $table->string('categoria');
            $table->text('comentario');

            $table->foreign('campus_id')
                ->references('id')->on('campuses')
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
        Schema::dropIfExists('categoria_items');
    }
}
