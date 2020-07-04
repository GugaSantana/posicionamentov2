<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumOfficeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('schooling')->after('number');
            $table->text('course')->after('schooling');
            $table->text('branch')->after('course');
            $table->text('activity')->after('branch');
            $table->text('office')->after('activity');
            $table->text('cellphone')->after('fone');
            $table->text('complement')->nullable()->after('address');
            $table->text('gender')->after('name');
            $table->dropColumn(['formation']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['schooling', 'course', 'branch', 'activity', 'office', 'cellphone', 'complement', 'gender']);
            $table->text('formation')->nullable();
        });
    }
}
