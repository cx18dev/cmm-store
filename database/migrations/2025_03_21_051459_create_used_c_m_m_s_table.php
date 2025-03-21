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
        Schema::create('used_c_m_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('cmm_name')->nullable();
            $table->string('slug')->nullable();
            $table->string('stock_number')->nullable();
            $table->string('measuring_range')->nullable();
            $table->string('software')->nullable();
            $table->string('probe_head')->nullable();
            $table->string('touch_probe')->nullable();
            $table->string('image')->nullable();
            $table->longText('pc')->nullable();
            $table->integer('availablility')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('used_c_m_m_s');
    }
};
