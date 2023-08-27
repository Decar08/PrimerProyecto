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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            //crear campos
            //solo acepta numeros posistivos y numeros enteros
            $table->unsignedBigInteger('user_id');
            //crear la relación entre esta tabla y la tabla users
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('body');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
