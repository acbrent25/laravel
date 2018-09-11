<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvolution11sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evolution_1_1s', function (Blueprint $table) {
            $table->increments('id');
            
            // BB Bench Press
            $table->string('bb_press_r_1');
            $table->string('bb_press_r_2');
            $table->string('bb_press_r_3');
            $table->string('bb_press_r_4');
            $table->string('bb_press_r_5');
            $table->string('bb_press_r_6');
            $table->string('bb_press_r_7');

            $table->string('bb_press_w_1');
            $table->string('bb_press_w_2');
            $table->string('bb_press_w_3');
            $table->string('bb_press_w_4');
            $table->string('bb_press_w_5');
            $table->string('bb_press_w_6');
            $table->string('bb_press_w_7');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evolution_1_1s');
    }
}
