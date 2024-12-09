<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigrationFixesAndCorrections extends Migration
{
    public function up()
    {
        # Default Placeholder for missing logos
        Schema::table('medical_plans', function (Blueprint $table) {
            $table->string('logo_path')->default('https://via.placeholder.com/300x150.png?text=Bioreligare+2021')->change();
        });

        # Set up specialty type table
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('specialty_type');
        Schema::create('specialty_type', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();

        Schema::table('specializations', function (Blueprint $table) {
            $table->foreignId('specialty_type_id')->change();
            $table->string('main_banner_path')->nullable()->change();
            $table->string('secondary_banner_path')->nullable()->change();
            $table->string('type')->nullable();
        });

        # Set up extra collumns for Medical Plan
        Schema::table('medical_plans', function (Blueprint $table) {
            $table->string('text_title')->nullable();
            $table->text('text_small')->nullable();
        });

        Schema::table('specializations', function (Blueprint $table) {
            $table->dropColumn('specialty_field_id');
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
