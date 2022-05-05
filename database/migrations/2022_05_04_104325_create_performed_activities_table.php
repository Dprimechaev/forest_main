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
        Schema::create('performed_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Выполненные хозяйственные мероприятия
            $table->string('event');
            $table->string('year');
            $table->string('tree');
            $table->string('stock');
            $table->string('analysis');
            $table->string('performance');
            $table->string('reason_performance');
            $table->string('square');
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
        Schema::dropIfExists('performed_activities');
    }
};
