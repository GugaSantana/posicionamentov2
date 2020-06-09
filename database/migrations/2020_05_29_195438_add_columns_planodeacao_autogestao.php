<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsPlanodeacaoAutogestao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('auto_gestao', function (Blueprint $table) {
            $table->text('oque')->nullable();
            $table->text('como')->nullable();
            $table->text('quando')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('auto_gestao', function (Blueprint $table) {
            $table->dropColumn(['oque', 'como', 'quando']);
        });
    }
}
