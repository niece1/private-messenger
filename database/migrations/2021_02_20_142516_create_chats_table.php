<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('message_id')->references('id')->on('messages')->onDelete('set null');
            $table->unsignedInteger('seance_id')->references('id')->on('seances')->onDelete('set null');
            $table->unsignedInteger('user_id')->references('id')->on('users')->onDelete('set null');
            $table->dateTime('read_at')->nullable();
            $table->boolean('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
}
