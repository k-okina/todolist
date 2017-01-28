<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodolistMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolist_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('todolist_id');
            $table->unsignedInteger('user_id');
            $table->text('message');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('todolist_id')->references('id')->on('todolists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todolist_messages');
    }
}
