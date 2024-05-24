<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saveds', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('pin_id');
            $table->primary(['user_id', 'pin_id']);
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('pin_id')->references('pin_id')->on('pins');
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
        Schema::dropIfExists('saved');
    }
};
