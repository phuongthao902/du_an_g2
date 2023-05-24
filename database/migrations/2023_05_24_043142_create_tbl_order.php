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
        if (!Schema::hasTable('tbl_order')){
        Schema::create('tbl_order', function (Blueprint $table) {
            $table->bigIncrements('order_id');
            $table->bigInteger('product_id')->unsigned();
            $table->integer('user_id');
            $table->text('quantity');
            $table->text('address');
            $table->integer('status');
            $table->integer('bill_info');
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('tbl_product');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_order');
    }
};
