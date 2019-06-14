<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesOderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_oder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('oderId')->unsigned();
            $table->unsignedBigInteger('articleId')->unsigned();
            
            $table->foreign('oderId')->references('id')->on('oders');
            $table->foreign('articleId')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_oder');
    }
}
