<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterSpecializationTableInsertOrderAndProfessionalType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specializations', function(Blueprint $table) {
            $table->foreign('professional_type_id')->references('id')->on('professional_types');
            $table->foreign('specialty_type_id')->references('id')->on('specialty_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
