<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixAutoincriment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');

            Schema::dropIfExists('news_blocks');
            Schema::dropIfExists('news_tag');


            $table->unsignedBigInteger('id')->autoIncrement()->change();

            DB::statement('SET FOREIGN_KEY_CHECKS = 1');

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
            $table->unsignedInteger('id')->change();
        });
    }
}
