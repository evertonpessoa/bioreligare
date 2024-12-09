<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maps', function (Blueprint $table) {
            $table->dropColumn('whatsapp');
            $table->dropColumn('main_photo');
            $table->string('map_image');
            $table->string('whatsapp_principal');
            $table->string('whatsapp_secundário');

            $table->string('endereco_rua_matriz');
            $table->string('endereco_numero_matriz');
            $table->string('endereco_complemento_matriz');
            $table->string('endereco_ponto_referencia_matriz');

            $table->string('endereco_rua_filial');
            $table->string('endereco_numero_filial');
            $table->string('endereco_complemento_filial');
            $table->string('endereco_ponto_referencia_filial');

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
