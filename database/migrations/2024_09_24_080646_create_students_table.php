<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('dob');
            $table->string('nationality');
            $table->string('citizenship');
            $table->string('religion');
            $table->string('parent_full_name');
            $table->string('parent_nationality');
            $table->string('parent_citizenship');
            $table->string('parent_address');
            $table->string('parent_residence');
            $table->text('previous_schools')->nullable();

            // Photo fields
            $table->string('student_photo')->nullable();
            $table->string('parent_photo')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
