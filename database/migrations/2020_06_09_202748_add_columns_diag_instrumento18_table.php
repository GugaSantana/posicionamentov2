<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsDiagInstrumento18Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instrumento18', function (Blueprint $table) {
            $table->integer('a_diag')->nullable();	
            $table->integer('b_diag')->nullable();
            $table->integer('c_diag')->nullable();
            $table->integer('d_diag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instrumento18', function (Blueprint $table) {
            $table->dropColumn(['a_diag', 'b_diag', 'c_diag', 'd_diag']);
        });
    }
}
