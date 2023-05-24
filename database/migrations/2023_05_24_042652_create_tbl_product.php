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
        if (!Schema::hasTable('tbl_product')) {
            Schema::create('tbl_product', function (Blueprint $table) {
                $table->bigInteger('product_id');
                $table->bigInteger('category_id')->unsigned();
                $table->bigInteger('origin_id')->unsigned();
                $table->bigInteger('order_id')->unsigned();
                $table->bigInteger('brand_id')->unsigned();

                $table->text('product_name');
                $table->integer('inventory_on');
                $table->integer('inventory');
                $table->text('detailed_notes');
                $table->integer('new');
                $table->integer('changed');
                $table->integer('pricing_unit');
                $table->text('product_desc');
                $table->string('unit_price');
                $table->string('product_image');
                $table->integer('ordering_unit');
                $table->integer('random_weight');
                $table->integer('meat_weight_type');
                $table->integer('minimum_weight');
                $table->integer('maximum_weight');
                $table->string('extra_charge');
                $table->bigInteger('image_id')->unsigned();
                $table->integer('donotlist');
                $table->integer('confirmed');
                $table->timestamp('modified');
                $table->integer('tax_exempt');
                $table->integer('hidefrominvoice');
                $table->integer('is_compound');

                $table->timestamps();

                $table->primary('product_id');

                $table->foreign('category_id')->references('category_id')->on('tbl_category');

                $table->foreign('origin_id')->references('origin_id')->on('tbl_origin');

                $table->foreign('brand_id')->references('brand_id')->on('tbl_brand');

                $table->foreign('image_id')->references('image_id')->on('tbl_product_images');
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_product');
    }
};
