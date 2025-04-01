<?php

use Illuminate\Database\Eloquent\SoftDeletes;
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
        Schema::create('char_sheets', function (Blueprint $table) {
            $table->id();
            $table->integer('Strength');
            $table->integer('Dexterity');
            $table->integer('Constitution');
            $table->integer('Intelligence');
            $table->integer('Wisdom');
            $table->integer('Charisma');
            $table->integer('Proficiency');
            $table->integer('Walkingspeed');
            $table->integer('Initiative');
            $table->integer('Armorclass');
            $table->integer('Maxhealth');
            $table->integer('Currenthealth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('char_sheets');
    }
};
