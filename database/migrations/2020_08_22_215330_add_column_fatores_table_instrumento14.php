<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnFatoresTableInstrumento14 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instrumento14', function (Blueprint $table) {
            $table->text('fatores')->after('cores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instrumento14', function (Blueprint $table) {
            $table->dropColumn(['fatores']);
        });
    }
}
