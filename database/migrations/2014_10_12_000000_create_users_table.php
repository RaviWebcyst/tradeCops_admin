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
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('dob')->nullable();
            $table->string('uid')->nullable();
            $table->string('spid')->nullable();
            $table->string('image')->nullable();
            $table->boolean('email_verified')->default(0);
            $table->boolean('payment_status')->default(0);
            $table->string('kyc_status')->default("Pending");
            $table->string('package')->nullable();
            $table->bigInteger('enable')->default(0);
            $table->bigInteger('is_enabled')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->string('password');
            $table->string('showPass')->nullable();
            $table->string('paid_date')->nullable();
            $table->integer('rank')->default(1);
            $table->integer('level')->default(0);
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
