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
        if (!Schema::hasTable('tbl_order_pro')) {
        Schema::create('tbl_order_pro', function (Blueprint $table) {
            $table->bigIncrements('order_pro_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->timestamps();

            $table->foreign('order_id')->references('order_id')->on('tbl_order');
            $table->foreign('product_id')->references('product_id')->on('tbl_product');

            $table->foreign('order_pro_id')->references('order_pro_id')->on('tbl_order_pro');

        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_order_pro');
    }
};
