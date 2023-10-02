<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('id_proof')->nullable();
            $table->string('address_proof')->nullable();
            $table->string('complete_address')->nullable();
            $table->bigInteger('postal_code')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('account_type')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_no')->nullable();
            $table->string('ifsc')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('cheque_book')->nullable();
            $table->string('image')->nullable();
            $table->string('signature')->nullable();
            $table->string('remarks')->nullable();
            $table->string('status')->detault("Pending");
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
        Schema::dropIfExists('kycs');
    }
}
