<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTreeBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tree_blocks', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';

            $table->increments('id');
            $table->unsignedInteger('tree_id');
            $table->string("title");
            $table->string("title_ru");
            $table->string("title_en");
            $table->text("description");
            $table->text("description_ru");
            $table->text("description_en");

            $table->integer('priority')->default(0);

            $table->foreign('tree_id')->references('id')->on('tb_tree')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tree_blocks');
    }
}
