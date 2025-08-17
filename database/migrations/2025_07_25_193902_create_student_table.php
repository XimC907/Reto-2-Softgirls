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
        Schema::create('student', function (Blueprint $table) {
            $table->string('student_id', 10);
            $table->primary('student_id');
            $table->string('student_name', 100);
            $table->char('student_gender', 2);
            $table->integer('student_age');
            $table->string('student_email', 100);
            $table->string('student_phone', 10);
            $table->string('program_id', 10);
            $table->string('neighborhood_id', 10);
            $table->foreign('program_id')->references('program_id')->on('program');
            $table->foreign('neighborhood_id')->references('neighborhood_id')->on('neighborhood');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
