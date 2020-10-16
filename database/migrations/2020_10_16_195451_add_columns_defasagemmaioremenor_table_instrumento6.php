<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsDefasagemmaioremenorTableInstrumento6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instrumento6', function (Blueprint $table) {
            $table->decimal('maiorDefasagem', 5, 3)->after('mediaProdutividade');
            $table->decimal('menorDefasagem', 5, 3)->after('maiorDefasagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instrumento6', function (Blueprint $table) {
            $table->dropColumn(['maiorDefasagem', 'menorDefasagem']);
        });
    }
}
