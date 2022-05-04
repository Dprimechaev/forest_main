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
            //Лесные культуры
            $table->integer('year_created');
            $table->string('cultivation_method');
            $table->string('method_created');
            $table->string('distance_between');
            $table->string('distance_into');
            $table->string('seats_number');
            $table->string('condition');
            $table->string('cause');
            //Повреждение насаждения
            $table->string('damage_type');
            $table->string('damage_year');
            $table->string('damaged_tree');
            $table->string('disease_type');
            $table->string('disease_damage');
            $table->string('pest_type');
            $table->string('pest_damage');
            // Земли линейного протяжения
            $table->string('width');
            $table->string('length');
            $table->string('state');
            $table->string('road_purpose');
            $table->string('coating_type');
            $table->string('roadway_width');
            $table->string('seasonality');
            //Травянистые растения
            $table->string('accounting_category');
            $table->string('herbal_plants');
            $table->string('first_plants');
            $table->string('first_coverage');
            $table->string('second_plants');
            $table->string('second_coverage');
            $table->string('third_plants');
            $table->string('third_plants');
            //Выполненные хозяйственные мероприятия
            $table->string('event');
            $table->string('year');
            $table->string('tree');
            $table->string('stock');
            $table->string('analysis');
            $table->string('performance');
            $table->string('reason_performance');
            $table->string('square');
            //Недревесное сырьё
            $table->string('material_category');
            $table->string('tree_type');
            $table->integer('age');
            $table->string('height');
            $table->string('measurement_unit');
            $table->string('yield');
            $table->string('harvest_availability');
            //Селькоехозяйственное угодье
            $table->string('land_user');
            $table->string('land_quality');
            $table->string('pasture_type');
            $table->string('land_condition');
            $table->string('land_overgrowing');
            $table->string('overgrowing_percentage');
            $table->string('hayfield_yield');
            //Подсочка
            $table->string('breeding_start');
            $table->string('planned_end');
            $table->string('actual_completion');
            $table->string('planting_condition');
            $table->string('condition_reason');
            $table->string('diagram_number');
            $table->string('violation_technology');
            $table->string('chemical_stimulant');
            //Болото
            $table->string('swamp_type');
            $table->string('swamp_vegetation');
            $table->string('layer_thickness');
            $table->string('overgrowing_rock');
            $table->string('overgrowing_percentage');
            //Потери древесины
            $table->string('loss_category');
            $table->string('loss_location');
            $table->string('breed');
            $table->string('stock_total');
            $table->string('liquid_stock');
            $table->string('commercial_stock');
            $table->string('loss_square');
            // Рекреационная характеристика
            $table->string('landscape_type');
            $table->string('aesthetic_class');
            $table->string('recreational_class');
            $table->string('stability_class');
            $table->string('passability_degree');
            $table->string('viewability');
            $table->string('degradation_stages');
            $table->string('improvement_elements');
            // Сад
            $table->string('garden_category');
            $table->string('bookmark_year');
            $table->string('garden_breed');
            $table->string('between_rows');
            $table->string('row_spacing');
            $table->string('trees_number');
            $table->string('fruit_bearing');
            $table->string('garden_yield');
            // Особенности выдела
            $table->string('first_peculiarity');
            $table->string('second_peculiarity');
            $table->string('third_peculiarity');
            $table->string('fourth_peculiarity');
            $table->string('fifth_peculiarity');
            $table->string('sixth_peculiarity');
            $table->string('seventh_peculiarity');
            $table->string('eighth_peculiarity');
            // Характеристика почв
            $table->string('soil_type');
            $table->string('mechanical_composition');
            $table->string('soil_moisture');
            $table->string('turf_degree');
            $table->string('soil_power');
            $table->string('output_percentage');
            // Плантация, древесная школа
            $table->string('plantation_appointment');
            $table->string('plantation_year');
            $table->string('plantation_between');
            $table->string('plantation_into');
            $table->string('plantation_number');
            // Селекционная оценка
            $table->string('slection_indicators');
            //Данные предыдущего лесойстройства
            $table->string('partition_number');
            $table->string('partation_square');
            $table->string('partation_category');
            $table->string('partation_coefficient');
            $table->string('partation_dominant');
            $table->string('partation_main');
            $table->string('partation_completeness');
            $table->string('projected_event');
            //Доступность для хозяйственного воздействия
            $table->string('availability');
            $table->string('transport_type');
            $table->string('tracks_distance');
            //Гидролесомелиорация
            $table->string('drainage_network');
            $table->string('commissioning_year');
            $table->string('old_category');
            $table->string('tree_species');
            $table->string('dryer_distance');
            $table->string('dryers_between');
            $table->string('growth_class');
            // Комплексная оценка кедровников
            $table->string('complex_type');
            $table->string('yield_score');
            $table->string('biological_harvest');
            $table->string('complex_rank');
            $table->string('resin_productivity');
            $table->string('cedar_stock');
            $table->string('fir_stock');
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
