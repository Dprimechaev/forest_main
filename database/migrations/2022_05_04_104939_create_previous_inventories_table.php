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
        Schema::create('previous_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Данные предыдущего лесойстройства
            $table->string('partition_number');
            $table->string('partation_square');
            $table->string('partation_category');
            $table->string('partation_coefficient');
            $table->string('partation_dominant');
            $table->string('partation_main');
            $table->string('partation_completeness');
            $table->string('projected_event');
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
        Schema::dropIfExists('previous_inventories');
    }
};
