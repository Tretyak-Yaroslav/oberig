<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsNewsBlocks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news_blocks', function (Blueprint $table) {
            $table->string('picture');
            $table->string('file');
            $table->string('file_ru');
            $table->string('file_en');

            $table->string('file_name');
            $table->string('file_name_ru');
            $table->string('file_name_en');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_blocks', function (Blueprint $table) {
            $table->dropColumn(['picture', 'file', 'file_ru', 'file_en', 'file_name', 'file_name_ru', 'file_name_en']);
        });
    }
}
