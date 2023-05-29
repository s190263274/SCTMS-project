<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoopRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_coop_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coop_id');
            $table->unsignedBigInteger('student_id');
            // Add any additional columns as needed
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('coop_id')->references('id')->on('coop_training_programs');
            $table->foreign('student_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_coop_registrations');
    }
};



