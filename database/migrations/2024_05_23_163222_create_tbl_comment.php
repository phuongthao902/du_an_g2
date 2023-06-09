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
        if (!Schema::hasTable('tbl_comment')) {
            Schema::create('tbl_comment', function (Blueprint $table) {
                $table->bigIncrements('comment_id');
                $table->unsignedBigInteger('product_id');
                $table->unsignedBigInteger('user_id');
                $table->text('content');
                $table->string('post_time');
                $table->timestamps();

                //$table->primary('comment_id');

                $table->foreign('product_id')->references('product_id')->on('tbl_product')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_comment');
    }
};
