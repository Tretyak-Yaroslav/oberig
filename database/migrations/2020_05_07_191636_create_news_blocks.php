<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_blocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('news_id')->index();
            $table->integer('priority')->default(0);
            $table->string('title');
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('description');
            $table->text('description_ru');
            $table->text('description_en');

            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_blocks');
    }
}
