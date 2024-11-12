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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('event_ticket_id');
            $table->unsignedBigInteger('jenis_pembayaran');
            $table->integer('jumlah');
            $table->string('status', 20);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_ticket_id')->references('id')->on('event_tickets');
            $table->foreign('jenis_pembayaran')->references('id')->on('jenis_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
