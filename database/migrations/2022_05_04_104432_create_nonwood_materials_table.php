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
        Schema::create('nonwood_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Недревесное сырьё
            $table->string('material_category');
            $table->string('tree_type');
            $table->string('age');
            $table->string('height');
            $table->string('measurement_unit');
            $table->string('yield');
            $table->string('harvest_availability');
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
        Schema::dropIfExists('nonwood_materials');
    }
};
