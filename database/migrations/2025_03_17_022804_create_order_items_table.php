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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('id_order_item');
            $table->bigInteger('id_order')->unsigned();
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_order')->references('id_order')->on('orders')->cascadeOnDelete();
            $table->foreign('id_product')->references('id_product')->on('products')->cascadeOnDelete();
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
