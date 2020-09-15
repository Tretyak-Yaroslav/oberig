<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveSeoColms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn(['seo_title', 'seo_title_ru', 'seo_title_en', 'seo_description', 'seo_description_ru', 'seo_description_en']);
        });

        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropColumn(['seo_title', 'seo_title_ru', 'seo_title_en', 'seo_description', 'seo_description_ru', 'seo_description_en']);
        });

        Schema::table('tb_tree', function (Blueprint $table) {
            $table->dropColumn(['seo_title', 'seo_title_ru', 'seo_title_en', 'seo_description', 'seo_description_ru',
                'seo_description_en', 'is_show_in_menu', 'is_show_in_footer_menu', 'seo_keywords']);
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
            $table->string('seo_title');
            $table->string('seo_title_ru');
            $table->string('seo_title_en');

            $table->string('seo_description');
            $table->string('seo_description_ru');
            $table->string('seo_description_en');
        });

        Schema::table('vacancies', function (Blueprint $table) {
            $table->string('seo_title');
            $table->string('seo_title_ru');
            $table->string('seo_title_en');

            $table->string('seo_description');
            $table->string('seo_description_ru');
            $table->string('seo_description_en');
        });


        Schema::table('tb_tree', function (Blueprint $table) {
            $table->string('seo_title');
            $table->string('seo_title_ru');
            $table->string('seo_title_en');

            $table->string('seo_description');
            $table->string('seo_description_ru');
            $table->string('seo_description_en');
            $table->string('seo_keywords');

            $table->tinyInteger('is_show_in_menu');
            $table->tinyInteger('is_show_in_footer_menu');
        });
    }
}
