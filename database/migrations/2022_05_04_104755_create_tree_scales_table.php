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
        Schema::create('tree_scales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            // Плантация, древесная школа
            $table->string('plantation_appointment');
            $table->string('plantation_year');
            $table->string('plantation_between');
            $table->string('plantation_into');
            $table->string('plantation_number');
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
        Schema::dropIfExists('tree_scales');
    }
};
