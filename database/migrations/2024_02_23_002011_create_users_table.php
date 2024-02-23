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
            $table->string("fullname")->index();
            $table->enum("gender", ["M", "F"])->index();
            $table->string("phone", 32)->unique();
            $table->string("username")->unique();
            $table->string("email")->unique();
            $table->string("password");
            $table->binary("photo")->nullable();
            $table->string("photo_ext", 5)->nullable();
            $table->string("remember_token")->unique()->nullable();
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
