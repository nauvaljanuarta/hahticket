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
        Schema::create('event_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_name', 50);
            $table->unsignedBigInteger('event');
            $table->integer('jumlah_awal');
            $table->integer('jumlah_tersedia');
            $table->decimal('price', 10, 2);
            $table->timestamps();
            $table->foreign('event')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_tickets');
    }
};
