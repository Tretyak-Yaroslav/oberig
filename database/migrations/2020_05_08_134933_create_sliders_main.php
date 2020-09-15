<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersMain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders_on_main', function (Blueprint $table) {
            $table->id();
            $table->integer('priority');
            $table->string('title')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();

            $table->string('sub_title')->nullable();
            $table->string('sub_title_ru')->nullable();
            $table->string('sub_title_en')->nullable();

            $table->string('link')->nullable();
            $table->string('link_ru')->nullable();
            $table->string('link_en')->nullable();

            $table->string('picture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders_on_main');
    }
}
