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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id('delivery_id');
            $table->unsignedBigInteger('order_id');
            $table->text('delivery_address');
            $table->date('delivery_date');
            $table->unsignedBigInteger('courier_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('courier_id')->references('courier_id')->on('couriers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deliveries');
    }
};
