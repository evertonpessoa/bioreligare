<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableProfessionalProfilesAddProfessionalTypesId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professional_profiles', function (Blueprint $table) {
            $table->foreignId('professional_type_id')->constrained('professional_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professional_profiles', function (Blueprint $table) {
            //
        });
    }
}
