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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 100);
            $table->unsignedBigInteger('event_category');
            $table->unsignedBigInteger('penyelenggara');
            $table->text('description')->nullable();
            $table->datetime('event_date');
            $table->string('location', 255);
            $table->string('pic', 500);
            $table->integer('capacity');
            $table->timestamps();
            $table->foreign('event_category')->references('id')->on('event_categories');
            $table->foreign('penyelenggara')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
