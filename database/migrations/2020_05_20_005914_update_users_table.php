<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cpf');
            $table->string('nascimento');
            $table->string('fone')->nullable();
            $table->string('cep');
            $table->string('address');
            $table->string('quarter');
            $table->string('city');
            $table->string('state');
            $table->string('number');
            $table->string('formation');
            $table->string('empresa')->nullable();
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
