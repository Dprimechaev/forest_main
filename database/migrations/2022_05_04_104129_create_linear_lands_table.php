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
        Schema::create('linear_lands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            $table->string('width');
            $table->string('length');
            $table->string('state');
            $table->string('road_purpose');
            $table->string('coating_type');
            $table->string('roadway_width');
            $table->string('seasonality');
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
        Schema::dropIfExists('linear_lands');
    }
};
