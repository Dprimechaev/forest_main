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
        Schema::create('hydroforestries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Гидролесомелиорация
            $table->string('drainage_network');
            $table->string('commissioning_year');
            $table->string('old_category');
            $table->string('tree_species');
            $table->string('dryer_distance');
            $table->string('dryers_between');
            $table->string('growth_class');
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
        Schema::dropIfExists('hydroforestries');
    }
};
