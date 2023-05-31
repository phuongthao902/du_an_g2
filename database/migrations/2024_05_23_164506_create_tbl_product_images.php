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
        if (!Schema::hasTable('tbl_product_images')) {
        Schema::create('tbl_product_images', function (Blueprint $table) {
            $table->bigIncrements('image_id');
            $table->unsignedBigInteger('product_id');
            $table->text('image_desc');
            $table->integer('bin_data');
            $table->integer('filename');
            $table->integer('filesize');
            $table->integer('filetype');
            $table->timestamps();

            $table->foreign('product_id')->references('product_id')->on('tbl_product');

        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_product_images');
    }
};
