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
        Schema::create('topup_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('id_akun');
            $table->string('server_number');
            $table->UnsignedBigInteger('id_topup');
            $table->foreign('id_topup')->references('id')->on('list_games');
            $table->UnsignedBigInteger('id_bayar');
            $table->foreign('id_bayar')->references('id')->on('payment_methods');
            $table->double('price');
            $table->double('admin');
            $table->double('total');
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
        Schema::dropIfExists('topup_transactions');
    }
};
