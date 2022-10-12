<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPlayers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //relasi dari player ke satu club
        Schema::table('players', function (Blueprint $table) {
            $table->foreign('clubs_id', 'clubs_id_fk2')->references
            ('id')->on('clubs')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropForeign('clubs_id_fk2');
        });
    }
}
