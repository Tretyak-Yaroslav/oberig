<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTranslationToTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_tree', function (Blueprint $table) {
            $table->string('title_ru');
            $table->string('title_en');
            $table->text('description_ru');
            $table->text('description_en');

            $table->string('seo_title_ru');
            $table->string('seo_title_en');

            $table->text('seo_description_ru');
            $table->text('seo_description_en');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_tree', function (Blueprint $table) {
            $table->dropColumn([
                'title_ru', 'title_en', 'description_ru', 'description_en', 'seo_title_ru', 'seo_title_en', 'seo_description_ru', 'seo_description_en'
            ]);
        });
    }
}
