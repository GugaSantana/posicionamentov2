<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDesvioTableInstrumento2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instrumento2', function (Blueprint $table) {
            $table->integer('desvio_maior')->after('cores');
            $table->integer('desvio_menor')->after('desvio_maior');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instrumento2', function (Blueprint $table) {
            $table->dropColumn(['desvio_maior', 'desvio_menor']);
        });
    }
}
