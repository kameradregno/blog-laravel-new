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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('username');
            $table->string('roles')->enum(['USER', 'ADMIN'])->default('USER');
            $table->string('password');
<<<<<<< HEAD
=======
            $table->string('role')->enum('USER', 'ADMIN')->default('USER');
>>>>>>> e24095c29f6024dc58f3bc27a28de4a736120c9a
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
