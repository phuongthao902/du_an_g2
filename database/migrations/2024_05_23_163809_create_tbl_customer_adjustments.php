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
        if (!Schema::hasTable('tbl_customer_adjustments')) {
            Schema::create('tbl_customer_adjustments', function (Blueprint $table) {
                $table->bigIncrements('adjustment_id');
                $table->bigInteger('member_id')->unsigned();
                $table->integer('type_id');
                $table->bigInteger('transaction_id')->unsigned();
                $table->text('comments');
                $table->string('amount');
                $table->integer('applied');

                $table->timestamps();
                $table->foreign('transaction_id')->references('transaction_id')->on('transactions');

            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_customer_adjustments');
    }
};
