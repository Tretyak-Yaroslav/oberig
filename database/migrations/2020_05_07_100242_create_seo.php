<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->id();
            $table->integer('seo_id');
            $table->string('seo_type');
            $table->string('seo_title');
            $table->string('seo_title_ru');
            $table->string('seo_title_en');

            $table->text('seo_description');
            $table->text('seo_description_ru');
            $table->text('seo_description_en');

            $table->string('seo_keywords');
            $table->string('seo_keywords_ru');
            $table->string('seo_keywords_en');

            $table->tinyInteger('is_seo_noindex')->default(0);
            $table->string('seo_canonical');
            $table->string('seo_canonical_ru');
            $table->string('seo_canonical_en');

            $table->index(['seo_id', 'seo_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo');
    }
}
