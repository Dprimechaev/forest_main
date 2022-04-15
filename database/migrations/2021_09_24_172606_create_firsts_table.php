<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firsts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('card_id')->default(1)->constrained('cards');
            $table->string('republic')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('quarter')->nullable();
            $table->string('distance');
            $table->string('renter')->nullable();
            $table->string('number')->nullable();
            $table->string('area')->nullable();;
            $table->string('earthCategory')->nullable();;
            $table->string('protectionCategory')->nullable();;
            $table->string('cutWay')->nullable();
            $table->string('ozu')->nullable();
            $table->string('height')->nullable();
            $table->string('exposition')->nullable();
            $table->string('slope')->nullable();
            $table->string('erozionForm')->nullable();
            $table->string('erozionDegree')->nullable();
            $table->string('firstEvent')->nullable();
            $table->string('percent')->nullable();
            $table->string('firstPtk')->nullable();
            $table->string('secondEvent')->nullable();
            $table->string('secondPtk')->nullable();
            $table->string('thirdEvent')->nullable();
            $table->string('thirdPtk')->nullable();
            $table->string('target')->nullable();
            $table->string('dominantBreed')->nullable();;
            $table->string('bonitetClass')->nullable();;
            $table->string('forestType')->nullable();;
            $table->string('tlu')->nullable();;
            $table->string('fireDangeros')->nullable();
            $table->string('cutYear')->nullable();
            $table->string('allStump')->nullable();
            $table->string('pineStump')->nullable();
            $table->string('stumpDiameter')->nullable();
            $table->string('cutType')->nullable();
            $table->string('littering')->nullable();
            $table->string('liquid')->nullable();
            $table->string('deadwood')->nullable();
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
        Schema::dropIfExists('firsts');
    }
}
