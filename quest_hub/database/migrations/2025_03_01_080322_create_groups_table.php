<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('groups', function (Blueprint $table) {
        $table->id('group_id');
        $table->string('group_name', 70);
        $table->string('description', 100);
        $table->foreignId('account_id')->constrained('accounts');
        $table->foreignId('character_id')->constrained('characters');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
