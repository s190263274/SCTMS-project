<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoopTrainingProgramsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coop_training_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('mentor_id');
            $table->unsignedBigInteger('supervisor_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->dateTime('registration_close_date');
            $table->foreign('mentor_id')->references('id')->on('users');
            $table->foreign('supervisor_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coop_training_programs');
    }
};
