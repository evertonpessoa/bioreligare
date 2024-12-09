<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProfessionalProfilesPlatformFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professional_profiles', function (Blueprint $table) {
            $table->string('degree_url')->nullable()->change();
            $table->string('health_council_url')->nullable()->change();
            $table->string('professional_document')->nullable()->change();
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
