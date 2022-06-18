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
        Schema::create('registers', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('status')->default('active');
            $table->integer('amount');
            $table->integer('fkpayment')->unsigned();
            $table->integer('fkgateway')->unsigned();
            $table->integer('fkprofile')->unsigned();
            $table->timestamps();

            $table->foreign('fkpayment')->references('id')->on('payments');
            $table->foreign('fkgateway')->references('id')->on('gateways');
            $table->foreign('fkprofile')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
