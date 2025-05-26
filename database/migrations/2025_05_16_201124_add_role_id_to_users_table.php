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
      // database/migrations/[timestamp]_add_role_id_to_users_table.php
Schema::table('users', function (Blueprint $table) {
    $table->foreignId('role_id')->default(3)->constrained('roles'); // Default to user role
    $table->string('phone')->nullable();
    $table->date('date_of_birth')->nullable();
    $table->string('gender')->nullable();
    // Common fields for all users
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
