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
        Schema::table('characters', function (Blueprint $table) {
            $table->foreignId('account_id')->nullable()->constrained('accounts');
            $table->foreignId('adventure_id')->nullable()->constrained('adventures');
            $table->foreignId('sheet_id')->nullable()->constrained('char_sheets');
        });
        Schema::table('char_sheets', function (Blueprint $table) {
            $table->foreignId('character_id')->nullable()->constrained('characters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('characters', function (Blueprint $table) {
            //
        });
    }
};
