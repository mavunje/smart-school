<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained('applicants')->onDelete('cascade'); // Foreign key to applicants table
            $table->dateTime('interview_date'); // Date and time of the interview
            $table->string('interviewer_name'); // Name of the interviewer
            $table->string('location')->nullable(); // Location of the interview (optional)
            $table->time('duration')->nullable(); // Duration of the interview
            $table->boolean('attended')->default(false); // Whether the applicant attended or not
            $table->decimal('score', 5, 2)->nullable(); // Score or rating for the interview (optional, max 999.99)
            $table->text('remarks')->nullable(); // Additional remarks or feedback from the interview
            $table->string('result')->nullable(); // Result or decision of the interview
            $table->timestamps(); // Laravel's created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interviews');
    }
}
