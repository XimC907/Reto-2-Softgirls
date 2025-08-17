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
        Schema::create('neighborhood', function (Blueprint $table) {
            $table->string('neighborhood_id', 10);
            $table->primary('neighborhood_id');
            $table->string('neighborhood_name', 100);
            $table->string('commune_id', 5);
            $table->foreign('commune_id')->references('commune_id')->on('commune');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('neighborhood');
    }
};
