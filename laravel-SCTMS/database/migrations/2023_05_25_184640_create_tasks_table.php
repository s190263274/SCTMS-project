<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('task1');
            $table->text('task2');
            $table->text('task3');
            $table->text('task4');
            $table->text('task5');
            $table->text('response1')->nullable();
            $table->text('response2')->nullable();
            $table->text('response3')->nullable();
            $table->text('response4')->nullable();
            $table->text('response5')->nullable();
            $table->boolean('evaluated')->default(false);
            $table->text('evaluation_comments')->nullable();
            $table->integer('performance_rating')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}

