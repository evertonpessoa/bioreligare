<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProfessionalProfilesCreateColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professional_profiles', function (Blueprint $table) {
            $table->string('photo_path')->nullable();
            $table->string('name', 1000);
            $table->string('linkedin', 1000)->nullable();
            $table->string('instagram', 1000)->nullable();
            $table->string('facebook', 1000)->nullable();
            $table->string('description', 1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
