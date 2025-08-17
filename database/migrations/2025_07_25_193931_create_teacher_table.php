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
        Schema::create('teacher', function (Blueprint $table) {
            $table->string('teacher_id', 10);
            $table->primary('teacher_id');
            $table->string('teacher_name', 100);
            $table->string('teacher_email', 100);
            $table->string('teacher_phone', 10);
            $table->char('teacher_gender', 2);
            $table->string('department_id', 5);
            $table->foreign('department_id')->references('department_id')->on('department');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher');
    }
};
