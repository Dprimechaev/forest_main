<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seconds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->default(1)->constrained('cards');
            $table->string('tier');
            $table->string('coefComposition');
            $table->string('speciesComposition');
            $table->string('origin');
            $table->integer('age')->nullable();
            $table->integer('height');
            $table->integer('diameter');
            $table->integer('class')->default(1);
            $table->integer('density')->nullable();
            $table->integer('g')->nullable();
            $table->integer('stock')->nullable();
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
        Schema::dropIfExists('seconds');
    }
}
