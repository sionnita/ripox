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
        Schema::create('list_accounts', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('list_id');
            $table->foreign('list_id')->references('id')->on('list_games');
            $table->string('name');
            $table->text('image');
            $table->integer('price');
            $table->string('status');
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
        Schema::dropIfExists('list_accounts');
    }
};
