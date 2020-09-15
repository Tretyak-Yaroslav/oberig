<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';

            $table->increments('id');
            $table->unsignedInteger("tree_id")->index();
            $table->string("fio");
            $table->string("fio_ru");
            $table->string("fio_en");
            $table->string("position");
            $table->string("position_ru");
            $table->string("position_en");
            $table->text("description");
            $table->text("description_ru");
            $table->text("description_en");
            $table->string("picture");

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
        Schema::drop('team');
    }
}
