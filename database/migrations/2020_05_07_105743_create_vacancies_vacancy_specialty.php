<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesVacancySpecialty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies_vacancy_specialty', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vacancy_id')->index();
            $table->unsignedBigInteger('vacancy_specialty_id')->index();

            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('cascade');
            $table->foreign('vacancy_specialty_id')->references('id')->on('vacancy_specialty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies_vacancy_specialty');
    }
}
