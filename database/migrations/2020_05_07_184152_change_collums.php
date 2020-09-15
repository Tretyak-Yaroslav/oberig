<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCollums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('doctors_news');

        Schema::table('news', function (Blueprint $table) {
            $table->unsignedInteger('id')->change();
            $table->string('title', 255)->change();
            $table->string('title_ru', 255)->change();
            $table->string('title_en', 255)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->change();
            $table->string('title', 90)->change();
            $table->string('title_ru', 90)->change();
            $table->string('title_en', 90)->change();
        });

        Schema::create('doctors_news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('doctor_id')->nullable()->index();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->unsignedBigInteger('news_id')->nullable()->index();
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
            $table->timestamps();
        });
    }
}
