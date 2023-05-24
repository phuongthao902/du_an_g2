<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('tbl_customer_basket_items')) {
            Schema::create('tbl_customer_basket_items', function (Blueprint $table) {
                $table->bigIncrements('bpid');
                $table->bigInteger('basket_id')->unsigned();
                $table->bigInteger('product_id')->unsigned();
                $table->string('item_price');
                $table->text('quantity');
                $table->integer('random_weight');
                $table->string('total_weight');
                $table->integer('extra_charge');
                $table->integer('out_of_stock');
                $table->integer('future_delivery');
                $table->integer('future_delivery_type');
                $table->integer('future_delivery_paymentup');
                $table->text('customer_notes_to_producer');
                $table->dateTime('date_added');
                $table->timestamp('item_date');
                $table->integer('retail_staple');
                $table->integer('future_delivery_id')->id();
                $table->timestamps();

                $table->foreign('basket_id')->references('basket_id')->on('tbl_customer_baskets_items');
                $table->foreign('product_id')->references('product_id')->on('tbl_product');

            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_customer_basket_items');
    }
};
