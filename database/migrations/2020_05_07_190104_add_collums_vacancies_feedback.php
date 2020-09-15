<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumsVacanciesFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
        Schema::table('vacancies_feedback', function (Blueprint $table) {
            $table->unsignedBigInteger('vacancy_id')->change();
//            $table->timestamps();
        });

        Schema::table('vacancies_feedback', function (Blueprint $table) {
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('cascade');
        });
*/  
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacancies_feedback', function (Blueprint $table) {
            $table->unsignedBigInteger('vacancy_id');

  //          $table->dropColumn(['created_at', 'updated_at']);
        });
    }
}
