<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies_feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 90)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('position', 50)->nullable();
            $table->string('resume_file')->nullable();

            $table->unsignedBigInteger('vacancy_id')->nullable()->index();
            $table->foreign('vacancy_id')->references('id')->on('vacancies')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies_feedback');
    }
}
