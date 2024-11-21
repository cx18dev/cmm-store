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
        // Create the probes table
        Schema::create('probes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });

        // Add the probe_id column to the parts table
        Schema::table('parts', function (Blueprint $table) {
            $table->unsignedBigInteger('probe_id')->nullable()->after('id');
            $table->foreign('probe_id')->references('id')->on('probes')->onDelete('cascade'); // Foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the probe_id column from the parts table
        Schema::table('parts', function (Blueprint $table) {
            $table->dropForeign(['probe_id']); // Drop the foreign key first
            $table->dropColumn('probe_id');   // Then drop the column
        });

        // Drop the probes table
        Schema::dropIfExists('probes');
    }
};
