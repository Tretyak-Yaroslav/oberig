<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_menu', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';

            $table->id();
            $table->integer("parent_id")->index()->nullable();
            $table->integer("lft");
            $table->integer("rgt");
            $table->integer("depth");
            $table->string("title");
            $table->string("title_en")->nullable();
            $table->string("title_ru")->nullable();
            $table->unsignedInteger("tb_tree_id")->nullable()->index();
            $table->string("url_external");
            $table->string("url");

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
        Schema::dropIfExists('footer_menu');
    }
}
