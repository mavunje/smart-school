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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('fname'); // First Name
            $table->string('lname'); // Last Name
            $table->string('gender')->nullable(); // Gender
            $table->string('account_number')->nullable(); // Account Number
            $table->string('phone')->nullable(); // Phone
            $table->string('email')->unique(); // Email
            $table->string('job_title')->nullable(); // Job Title
            $table->string('department')->nullable(); // Department
            $table->string('employment_type')->nullable(); // Employment Type
            $table->date('start_date')->nullable(); // Start Date
            $table->date('end_date')->nullable(); // End Date
            $table->integer('work_days')->nullable(); // Work Days Per Week
            $table->integer('work_hours_per_day')->nullable(); // Working Hours Per Day
            $table->json('certifications')->nullable(); // Certifications (to store file paths or URLs)

            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
