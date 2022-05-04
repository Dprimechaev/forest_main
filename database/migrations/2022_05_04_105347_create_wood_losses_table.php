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
        Schema::create('wood_losses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Потери древесины
            $table->string('loss_category');
            $table->string('loss_location');
            $table->string('breed');
            $table->string('stock_total');
            $table->string('liquid_stock');
            $table->string('commercial_stock');
            $table->string('loss_square');
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
        Schema::dropIfExists('wood_losses');
    }
};
