<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSpecializationsAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specializations', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->unsignedBigInteger('specialty_field_id')->nullable();
            $table->unsignedBigInteger('specialty_type_id')->nullable();
            $table->unsignedBigInteger('procedures_id')->nullable();
            $table->foreign('procedures_id')->references('id')->on('procedures');
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
