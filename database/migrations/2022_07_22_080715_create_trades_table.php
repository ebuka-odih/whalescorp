<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id');
            $table->string('symbol');
            $table->string('type');
            $table->double('amount');
            $table->string('sl')->nullable();
            $table->string('tp')->nullable();
            $table->string('leverage')->nullable();
            $table->integer('execution_time')->nullable();

            $table->integer('percent')->nullable();
            $table->integer('status')->nullable();
            $table->double('profit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
}
