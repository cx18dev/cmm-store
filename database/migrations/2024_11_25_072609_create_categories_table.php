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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->timestamps();
        });

        // Add the category_id column to the probes table
        Schema::table('probes', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Foreign key
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the categories column from the probes table
        Schema::table('probes', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Drop the foreign key first
            $table->dropColumn('category_id');   // Then drop the column
        });

        Schema::dropIfExists('categories');
    }
};
