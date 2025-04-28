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
        Schema::create('testimonies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);

            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');           
            $table->text('comment');
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->enum('type', ['video', 'message']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonies');
    }
};
