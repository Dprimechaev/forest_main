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
        Schema::create('availability_impacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->constrained('cards');
            //Доступность для хозяйственного воздействия
            $table->string('availability');
            $table->string('transport_type');
            $table->string('tracks_distance');
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
        Schema::dropIfExists('availability_impacts');
    }
};
