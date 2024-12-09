<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalSpecialization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_profile_specialization', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professional_profile_id');
            $table->foreign('professional_profile_id', 'pps_id')->references('id')->on('professional_profiles');
            $table->unsignedBigInteger('specialization_id');
            $table->foreign('specialization_id', 'sp_id')->references('id')->on('specializations');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_specialization');
    }
}
