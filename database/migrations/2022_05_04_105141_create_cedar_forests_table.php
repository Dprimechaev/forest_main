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
        Schema::create('cedar_forests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
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
        Schema::dropIfExists('cedar_forests');
    }
};
