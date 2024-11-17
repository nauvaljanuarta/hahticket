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
        Schema::create('jenis_users', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_user', 40);
            $table->string('create_by', 15);
            $table->string('update_by', 15);
            $table->timestamps();
        });


        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 40);
            $table->string('email', 40);
            $table->string('password');
            $table->string('no_hp', 15);
            $table->string('create_by', 15);
            $table->string('update_by', 15);
            $table->unsignedBigInteger('jenis_user_id');
            $table->timestamps();


            $table->foreign('jenis_user_id')->references('id')->on('jenis_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('jenis_users');
    }
};
