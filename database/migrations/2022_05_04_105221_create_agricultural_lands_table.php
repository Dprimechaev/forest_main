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
        Schema::create('agricultural_lands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Селькоехозяйственное угодье
            $table->string('land_user');
            $table->string('land_quality');
            $table->string('pasture_type');
            $table->string('land_condition');
            $table->string('land_overgrowing');
            $table->string('overgrowing_percentage');
            $table->string('hayfield_yield');
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
        Schema::dropIfExists('agricultural_lands');
    }
};
