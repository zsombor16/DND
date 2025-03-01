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
    Schema::create('user_accounts', function (Blueprint $table) {
        $table->id();
        $table->string('username', 100)->unique();
        $table->string('name', 100);
        $table->string('email', 100)->unique();
        $table->string('userpassword', 255);
        $table->date('birthdate');
        $table->string('city', 70);
        $table->foreignId('interest_id')->constrained('interests');
        $table->foreignId('experience_id')->constrained('experiences');
        $table->string('phone', 30)->unique();
        $table->string('description', 100);
        $table->integer('time_used');
        $table->string('profile_picture', 255);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_accounts');
    }
};
