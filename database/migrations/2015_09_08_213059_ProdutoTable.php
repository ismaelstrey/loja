<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('prince',5,2);
            $table->string('description');
            $table->string('photo');
            $table->string('thunb');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categoria');
            // $table->integer('image_id')->unsigned();
            // $table->foreign('image_id')->references('id')->on('imagem');
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
        Schema::drop('produto');
    }
}
