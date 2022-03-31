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
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_operation_id')->unsigned();
            $table->foreign('type_operation_id')->references('id')->on('type_operations');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->integer('caisse_id')->unsigned();
            $table->foreign('caisse_id')->references('id')->on('caisses');
            $table->integer('amount');
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
        Schema::dropIfExists('operations');
    }
};
