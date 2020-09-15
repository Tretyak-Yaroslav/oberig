<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 90)->nullable();
            $table->string('title_ru', 90)->nullable();
            $table->string('title_en', 90)->nullable();
            $table->text('description')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->text('short_description')->nullable();
            $table->text('short_description_ru')->nullable();
            $table->text('short_description_en')->nullable();
            $table->string('picture')->nullable();
            $table->string('seo_title', 90)->nullable();
            $table->string('seo_title_ru', 90)->nullable();
            $table->string('seo_title_en', 90)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_description_ru')->nullable();
            $table->text('seo_description_en')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->integer('priority')->default(0);
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
        Schema::dropIfExists('news');
    }
}
