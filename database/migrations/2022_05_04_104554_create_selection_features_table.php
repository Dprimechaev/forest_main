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
        Schema::create('selection_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            // Особенности выдела
            $table->string('first_peculiarity');
            $table->string('second_peculiarity');
            $table->string('third_peculiarity');
            $table->string('fourth_peculiarity');
            $table->string('fifth_peculiarity');
            $table->string('sixth_peculiarity');
            $table->string('seventh_peculiarity');
            $table->string('eighth_peculiarity');
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
        Schema::dropIfExists('selection_features');
    }
};
