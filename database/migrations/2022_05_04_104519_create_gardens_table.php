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
        Schema::create('gardens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            // Сад
            $table->string('garden_category');
            $table->string('bookmark_year');
            $table->string('garden_breed');
            $table->string('between_rows');
            $table->string('row_spacing');
            $table->string('trees_number');
            $table->string('fruit_bearing');
            $table->string('garden_yield');
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
        Schema::dropIfExists('gardens');
    }
};
