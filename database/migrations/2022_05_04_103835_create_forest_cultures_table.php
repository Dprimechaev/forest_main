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
        Schema::create('forest_cultures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            $table->string('year_created');
            $table->string('cultivation_method');
            $table->string('method_created');
            $table->string('distance_between');
            $table->string('distance_into');
            $table->string('seats_number');
            $table->string('condition');
            $table->string('cause');
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
        Schema::dropIfExists('forest_cultures');
    }
};
