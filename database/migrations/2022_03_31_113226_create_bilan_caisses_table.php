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
        Schema::create('bilan_caisses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('start_amount');
            $table->integer('final_amount');
            $table->integer('debit_amount')->nullable();
            $table->integer('credit_amount')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('caisse)id');

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
        Schema::dropIfExists('bilan_caisses');
    }
};
