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
    Schema::create('adventures', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained('accounts');
        $table->string('name', 100);
        $table->string('complexity', 70);
        $table->string('description', 100);
        $table->string('pictures', 255);
        $table->string('assets', 100);
        $table->string('detail_pdf', 255);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adventures');
    }
};
