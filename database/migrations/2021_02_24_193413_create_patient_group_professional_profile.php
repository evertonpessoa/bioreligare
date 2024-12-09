<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientGroupProfessionalProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_group_professional_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('professional_profile_id');
            $table->foreign('professional_profile_id', 'ppg_id')->references('id')->on('professional_profiles');
            $table->unsignedBigInteger('patient_group_id');
            $table->foreign('patient_group_id', 'pg_id')->references('id')->on('patient_groups');
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
        Schema::dropIfExists('pacient_group_professional');
    }
}
