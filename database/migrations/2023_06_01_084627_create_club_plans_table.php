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
        Schema::create('club_plans', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->string('presenter');
            $table->enum('status', ['معتمدة', 'غير معتمدة', 'تحتاج مراجعة']);
            $table->foreignId('club_id')->references('id')->on('clubs');
            $table->foreignId('year_id')->references('id')->on('activity_years');
            $table->foreignId('location_id')->references('id')->on('locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('club_plans');
    }
};
