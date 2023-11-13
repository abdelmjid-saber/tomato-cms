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
        Schema::table('pages', function (Blueprint $table) {
            $table->boolean('lock')->default(0)->nullable();
        });

        Schema::table('sections', function (Blueprint $table) {
            $table->boolean('lock')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropIfExists('lock');
        });

        Schema::table('sections', function (Blueprint $table) {
            $table->dropIfExists('lock');
        });
    }
};
