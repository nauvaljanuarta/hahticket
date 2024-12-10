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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_ticket_id');
            $table->integer('stock_awal');
            $table->integer('stock_sekarang');
            $table->integer('stock_terjual')->default(0);
            $table->timestamp('restocked_at')->nullable();
            $table->timestamps();
            $table->foreign('event_ticket_id')->references('id')->on('event_tickets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
