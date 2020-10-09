<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('score', function (Blueprint $table) {
            $table->foreignId('board_id');
            $table->foreignId('player_id');

            $table->foreign('board_id')->references('id')->on('boards');
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('score', function (Blueprint $table) {
            $table->dropColumn('boards');
            $table->dropColumn('players');
        });
    }
}
