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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('startBook');
            $table->date('endBook');
            $table->unsignedBigInteger('carId');
            $table->unsignedBigInteger('userId');
            $table->enum('bookType', ['0', '1']);
            $table->integer('totalCost')->length(7)->unsigned();
            $table->timestamps();

            $table->foreign('carId')->references('id')->on('cars');
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
