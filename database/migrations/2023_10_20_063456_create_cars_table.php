<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoryId');
            $table->string('carBrand', 30);
            $table->string('carName', 30);
            $table->enum('available', ['0','1']);
            $table->integer('totalSit')->length(1)->unsigned();
            $table->integer('totalLuggage')->length(1)->unsigned();
            $table->string('noPol', 13)->unique();
            $table->integer('costPerDay')->length(6)->unsigned();
            $table->timestamps();

            $table->foreign('categoryId')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
