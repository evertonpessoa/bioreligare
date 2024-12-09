<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMapsTableRev3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maps', function (Blueprint $table) {
            $table->string('contact_email', 70)->nullable()->change();
            $table->string('whatsapp_secundario', )->nullable()->change();
            $table->string('endereco_rua_filial')->nullable()->change();
            $table->string('endereco_numero_filial')->nullable()->change();
            $table->string('endereco_complemento_filial')->nullable()->change();
            $table->string('endereco_ponto_referencia_filial')->nullable()->change();
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
