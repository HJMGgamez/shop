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
            $table->unsignedBigInteger('oder_id')->unsigned();
            $table->unsignedBigInteger('article_id')->unsigned();
            
            $table->foreign('oder_id')->references('oder_id')->on('oders');
            $table->foreign('article_id')->references('article_id')->on('articles');
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
