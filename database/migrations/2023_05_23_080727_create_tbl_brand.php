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
        Schema::create('tbl_brand', function (Blueprint $table) {
            $table->bigIncrements('brand_id');
            $table->bigInteger('product_id')->unsigned();
            $table->integer('brand_name');
            $table->timestamps();

            //$table->foreign('product_id')->references('product_id')->on('tbl_product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_brand');
    }
};
