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
        Schema::create('tbl_compound_product_list', function (Blueprint $table) {
            $table->bigIncrements('compound_product_id')->id();
            $table->bigInteger('constituent_product_id')->id();
            $table->text('constituent_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_compound_product_list');
    }
};
