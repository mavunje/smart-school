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
            $table->id(); // Auto-incrementing primary key
            $table->string('fname'); // First Name
            $table->string('lname'); // Last Name
            $table->enum('gender', ['male', 'female']); // Gender
            $table->string('accountNumber')->unique(); // Account Number
            $table->string('phone'); // Phone
            $table->string('email')->unique(); // Email
            $table->string('jobTitle'); // Job Title
            $table->string('department'); // Department
            $table->enum('employmentType', ['full-time', 'part-time', 'contract']); // Employment Type
            $table->date('startDate'); // Start Date
            $table->date('endDate'); // End Date
            $table->integer('workDays'); // Work Days Per Week
            $table->integer('workHoursPerDay'); // Working Hours Per Day
            $table->text('certifications')->nullable(); // Certifications (assuming this is a text field for file paths or descriptions)
            $table->timestamps(); // created_at and updated_at timestamps

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
