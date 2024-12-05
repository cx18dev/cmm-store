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
        Schema::dropIfExists('main_categories');
        Schema::dropIfExists('sub_categories');

        Schema::table('categories', function (Blueprint $table) {
            $table->string('status')->default(0)->after('slug');
        });

        Schema::table('probes', function (Blueprint $table) {
            $table->string('status')->default(0)->after('description');
        });

        Schema::table('parts', function (Blueprint $table) {
            $table->string('status')->default(0)->after('discount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('probes', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('parts', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
