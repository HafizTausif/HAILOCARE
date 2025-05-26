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
     // database/migrations/[timestamp]_create_caregivers_table.php
Schema::create('caregivers', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->string('social_security')->nullable();
    $table->string('driver_license_front')->nullable();
    $table->string('driver_license_back')->nullable();
    $table->string('car_brand')->nullable();
    $table->string('car_model')->nullable();
    $table->string('car_plate_number')->nullable();
    $table->string('home_care_aid_number')->nullable();
    $table->text('certifications')->nullable(); // JSON or file paths
    $table->text('languages_spoken')->nullable(); // JSON array
    $table->string('profile_picture')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caregivers');
    }
};
