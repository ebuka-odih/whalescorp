<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('telegram')->nullable();
            $table->string('phone')->nullable();

            $table->unsignedBigInteger('referrer_id')->nullable();
            $table->foreign('referrer_id')->references('id')->on('users');
            $table->bigInteger('referred_by')->nullable();
            $table->string('username')->unique();
            $table->string('pass')->nullable();
            $table->string('avatar')->nullable();
            $table->string('type')->nullable();


            $table->double('balance')->nullable();
            $table->double('profit')->nullable();
            $table->double('signal_fee')->nullable();
            $table->double('ref_bonus')->nullable();

            $table->integer('admin')->default(0);
            $table->integer('status')->default(1);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
