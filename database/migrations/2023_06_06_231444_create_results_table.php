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
        Schema::create('Results', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('result');
            $table->string('manager_name');
            $table->foreignId('club_id')->references('id')->on('clubs');
            $table->foreignId('year_id')->references('id')->on('activity_years');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Results');
    }
};
