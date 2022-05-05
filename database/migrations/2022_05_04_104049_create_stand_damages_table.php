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
        Schema::create('stand_damages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Повреждение насаждения
            $table->string('damage_type');
            $table->string('damage_year');
            $table->string('damaged_tree');
            $table->string('disease_type');
            $table->string('disease_damage');
            $table->string('pest_type');
            $table->string('pest_damage');
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
        Schema::dropIfExists('stand_damages');
    }
};
