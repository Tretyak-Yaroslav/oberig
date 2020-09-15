<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorDoctorsSpecialty extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_doctors_specialty', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("doctor_id")->index();
            $table->unsignedInteger('doctors_specialty_id')->index();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('doctors_specialty_id')->references('id')->on('doctors_specialty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_doctors_specialty');
    }
}
