<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_header', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';

            $table->increments('id');
            $table->integer("parent_id")->index()->nullable();
            $table->integer("lft");
            $table->integer("rgt");
            $table->integer("depth");
            $table->string("title");
            $table->string("title_ru");
            $table->string("title_en");
            $table->unsignedInteger("tb_tree_id")->nullable()->index();
            $table->string("url");
            $table->string("url_external");

            $table->index(['lft', 'rgt']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu_header');
    }
}
