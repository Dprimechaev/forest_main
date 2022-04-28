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
        Schema::create('makets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            $table->string('title');
            $table->integer('year_created');
            $table->string('cultivation_method');
            $table->string('method_created');
            $table->string('distance_between');
            $table->string('distance_into');
            $table->string('seats_number');
            $table->string('condition');
            $table->string('cause');
            $table->string('damage_type');
            $table->string('damage_year');
            $table->string('damaged_tree');
            $table->string('disease_type');
            $table->string('disease_damage');
            $table->string('pest_type');
            $table->string('pest_damage');
            $table->string('width');
            $table->string('length');
            $table->string('state');
            $table->string('road_purpose');
            $table->string('coating_type');
            $table->string('roadway_width');
            $table->string('seasonality');
            $table->string('first_plants');
            $table->string('first_coverage');
            $table->string('second_plants');
            $table->string('second_coverage');
            $table->string('third_plants');
            $table->string('third_plants');
            $table->string('event');
            $table->string('year');
            $table->string('tree');
            $table->string('stock');
            $table->string('analysis');
            $table->string('performance');
            $table->string('reason_performance');
            $table->string('square');
            $table->string('material_category');
            $table->string('tree_type');
            $table->integer('age');
            $table->string('height');
            $table->string('measurement_unit');
            $table->string('yield');
            $table->string('harvest_availability');
            $table->string('land_user');
            $table->string('land_quality');
            $table->string('pasture_type');
            $table->string('land_condition');
            $table->string('land_overgrowing');
            $table->string('overgrowing_percentage');
            $table->string('hayfield_yield');
            $table->string('disease_damage');
            $table->string('pest_type');
            $table->string('pest_damage');
            $table->string('width');
            $table->string('length');
            $table->string('state');
            $table->string('road_purpose');
            $table->string('coating_type');
            $table->string('roadway_width');
            $table->string('seasonality');
            $table->string('first_plants');
            $table->string('first_coverage');
            $table->string('second_plants');
            $table->string('second_coverage');
            $table->string('third_plants');
            $table->string('third_plants');
            $table->string('event');
            $table->string('year');
            $table->string('tree');
            $table->string('stock');
            $table->string('analysis');
            $table->string('performance');
            $table->string('reason_performance');
            $table->string('square');
            $table->string('title');
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
        Schema::dropIfExists('makets');
    }
};
