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
        Schema::create('score', function (Blueprint $table) {
            $table->id('score_id');
            $table->float('score1');
            $table->float('score2');
            $table->float('score3');
            $table->float('final_score');
            $table->char('state', 1);
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('subject_id')->references('subject_id')->on('subject');
            $table->foreign('teacher_id')->references('teacher_id')->on('teacher');
            $table->foreign('student_id')->references('student_id')->on('student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score');
    }
};
