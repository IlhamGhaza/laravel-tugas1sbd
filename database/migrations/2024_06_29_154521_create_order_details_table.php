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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('arrangement_id');
            $table->integer('quantity');
            $table->decimal('unit_price', 8, 2);
            $table->decimal('sub_total', 8, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('arrangement_id')->references('arrangement_id')->on('flower_arrangements');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
