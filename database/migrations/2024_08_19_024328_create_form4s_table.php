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
        Schema::create('form4s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date');
            $table->string('gender');
            $table->string('region')->nullable();
            $table->string('dioces')->nullable();
            $table->string('nation')->nullable();
            $table->string('photo')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('parname');
            $table->string('parphone');
            $table->string('paremail')->nullable();
            $table->string('emergencephone');
            $table->text('health')->nullable();
            $table->text('disability')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form4s');
    }
};
