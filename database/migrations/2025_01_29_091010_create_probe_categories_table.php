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
        Schema::create('part_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::table('parts', function (Blueprint $table) {
            $table->string('part_category_id')->nullable()->after('probe_id');
            $table->string('module')->nullable()->after('part_category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_categories');

        Schema::table('parts', function (Blueprint $table) {
            $table->dropColumn('part_category_id');
            $table->dropColumn('module');
        });
    }
};
