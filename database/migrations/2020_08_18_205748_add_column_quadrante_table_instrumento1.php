<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnQuadranteTableInstrumento1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instrumento1', function (Blueprint $table) {
            $table->integer('quadrante')->after('acao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instrumento1', function (Blueprint $table) {
            $table->dropColumn(['quadrante']);
        });
    }
}
