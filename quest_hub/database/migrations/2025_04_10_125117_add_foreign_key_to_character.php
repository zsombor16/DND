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
            $table->foreignId('sheet_id')->nullable()->constrained('char_sheets');
            $table->foreignId('race_id')->nullable()->constrained('char_races');
            $table->foreignId('class_id')->nullable()->constrained('char_classes');
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
