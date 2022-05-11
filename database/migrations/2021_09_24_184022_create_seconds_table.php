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
            $table->foreignId('card_id')->constrained('cards');
            $table->string('tier'); // Ярус
            $table->string('coefComposition'); // Коэффициент
            $table->string('speciesComposition'); // Порода
            $table->integer('age')->nullable(); // Возраст
            $table->integer('height'); // Высота
            $table->integer('diameter'); // Диаметр
            $table->integer('class'); // Класс товарности
            $table->string('origin'); // Происхождение
            $table->integer('p')->nullable(); // P относ.
            $table->integer('g')->nullable(); // G
            $table->integer('stock')->nullable(); // Запас
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
