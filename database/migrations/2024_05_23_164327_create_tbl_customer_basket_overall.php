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
        if (!Schema::hasTable('tbl_customer_basket_overall')) {
        Schema::create('tbl_customer_basket_overall', function (Blueprint $table) {
            $table->bigIncrements('basket_id');
            $table->bigInteger('member_id')->unsigned();
            $table->integer('subtotal');
            $table->bigInteger('delivery_id')->unsigned();
            $table->text('coopfee');
            $table->integer('delcode_id');
            $table->string('deltype');
            $table->integer('delivery_cost');
            $table->integer('transcharge');
            $table->integer('sh');
            $table->bigInteger('payment_method')->unsigned();
            $table->integer('surcharge_for_paypal');
            $table->string('grand_total');
            $table->string('grand_total_coop');
            $table->integer('prev_balance');
            $table->string('amount_paid');
            $table->timestamp('order_date');
            $table->integer('balance_updated');
            $table->integer('submitted');
            $table->integer('finalized');
            $table->text('msg_unique');
            $table->timestamps();

            $table->foreign('payment_method_id')->references('payment_method_id')->on('tbl_payment_method');

        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_customer_basket_overall');
    }
};
