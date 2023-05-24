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
            $table->text('image_desc');
            $table->integer('bin_data');
            $table->integer('filename');
            $table->integer('filesize');
            $table->integer('filetype');
            $table->timestamps();

            $table->foreign('image_id')->references('image_id')->on('tbl_product_images');

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
