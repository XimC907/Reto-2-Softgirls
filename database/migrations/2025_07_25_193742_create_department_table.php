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
        Schema::create('department', function (Blueprint $table) {
            $table->string('department_id', 5);
            $table->primary('department_id');
            $table->string('department_name', 200);
            $table->string('faculty_id', 10);
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department');
    }
};
