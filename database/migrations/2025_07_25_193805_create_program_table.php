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
        Schema::create('program', function (Blueprint $table) {
            $table->string('program_id', 10);
            $table->primary('program_id');
            $table->string('program_name', 200);
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
        Schema::dropIfExists('program');
    }
};
