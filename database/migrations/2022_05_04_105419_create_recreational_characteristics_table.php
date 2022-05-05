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
        Schema::create('recreational_characteristics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            // Рекреационная характеристика
            $table->string('landscape_type');
            $table->string('aesthetic_class');
            $table->string('recreational_class');
            $table->string('stability_class');
            $table->string('passability_degree');
            $table->string('viewability');
            $table->string('degradation_stages');
            $table->string('improvement_elements');
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
        Schema::dropIfExists('recreational_characteristics');
    }
};
