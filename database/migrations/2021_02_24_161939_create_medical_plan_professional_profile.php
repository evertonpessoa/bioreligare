<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalPlanProfessionalProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_plan_professional_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professional_profile_id');
            $table->foreign('professional_profile_id', 'professional_id')->references('id')->on('professional_profiles');
            $table->unsignedBigInteger('medical_plan_id');
            $table->foreign('medical_plan_id', 'plan_id')->references('id')->on('medical_plans');
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
        Schema::dropIfExists('medical_plan_professional');
    }
}
