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
        Schema::create('swamps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Болото
            $table->string('swamp_type');
            $table->string('swamp_vegetation');
            $table->string('layer_thickness');
            $table->string('overgrowing_rock');
            $table->string('swamp_overgrowing');
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
        Schema::dropIfExists('swamps');
    }
};
