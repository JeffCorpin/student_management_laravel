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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');        // e.g., "CS101"
            $table->string('course_name');        // e.g., "Introduction to Programming"
            $table->integer('credits')->default(0);
            $table->string('semester')->nullable();   // e.g., "Fall", "Spring"
            $table->year('year')->nullable();         // e.g., 2025
            $table->string('department')->nullable(); // e.g., "Computer Science"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
