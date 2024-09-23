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
        // Create the cars table
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('listing_id'); // Reference to the base listing
            $table->string('make');
            $table->string('model');
            $table->integer('number_of_doors');
            $table->string('body_type');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('listing_id')->references('id')->on('listings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
