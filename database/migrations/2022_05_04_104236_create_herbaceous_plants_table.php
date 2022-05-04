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
        Schema::create('herbaceous_plants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            $table->string('accounting_category');
            $table->string('herbal_plants');
            $table->string('first_plants');
            $table->string('first_coverage');
            $table->string('second_plants');
            $table->string('second_coverage');
            $table->string('third_plants');
            $table->string('third_coverage');
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
        Schema::dropIfExists('herbaceous_plants');
    }
};
