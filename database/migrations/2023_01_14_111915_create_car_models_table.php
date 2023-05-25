<?php

use App\Models\Car;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('carId')->constrained('cars')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug');
            $table->text('image');
            $table->string('releasedAt');
            $table->string('stoppedAt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("car_models");
    }
};
