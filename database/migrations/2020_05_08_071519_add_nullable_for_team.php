<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableForTeam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team', function (Blueprint $table) {
            $table->string('fio')->nullable()->change();
            $table->string('fio_ru')->nullable()->change();
            $table->string('fio_en')->nullable()->change();

            $table->string('position')->nullable()->change();
            $table->string('position_en')->nullable()->change();
            $table->string('position_ru')->nullable()->change();

            $table->text('description')->nullable()->change();
            $table->text('description_ru')->nullable()->change();
            $table->text('description_en')->nullable()->change();

            $table->string('picture')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team', function (Blueprint $table) {
            $table->string('fio')->change();
            $table->string('fio_ru')->change();
            $table->string('fio_en')->change();

            $table->string('position')->change();
            $table->string('position_en')->change();
            $table->string('position_ru')->change();

            $table->text('description')->change();
            $table->text('description_ru')->change();
            $table->text('description_en')->change();

            $table->string('picture')->change();
        });
    }
}
