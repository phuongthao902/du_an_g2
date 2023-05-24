<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_transactions', function (Blueprint $table) {
            $table->bigInteger('transaction_id');
            $table->integer('transaction_type');
            $table->integer('transaction_name');
            $table->string('transaction_amount');
            $table->integer('transaction_user');
            $table->integer('transaction_basket_id');
            $table->bigInteger('transaction_delivery_id')->unsigned();
            $table->dateTime('transaction_timestamp');
            $table->integer('transaction_memo');
            $table->integer('transaction_comments');
            $table->integer('transaction_method');
            $table->timestamps();

            $table->primary("transaction_id");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_transactions');
    }
};
