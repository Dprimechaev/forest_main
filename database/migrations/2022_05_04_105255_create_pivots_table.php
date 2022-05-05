<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Подсочка
            $table->string('breeding_start');
            $table->string('planned_end');
            $table->string('actual_completion');
            $table->string('planting_condition');
            $table->string('condition_reason');
            $table->string('diagram_number');
            $table->string('violation_technology');
            $table->string('chemical_stimulant');
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
        Schema::dropIfExists('pivots');
    }
};
