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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id_order');
            $table->bigInteger('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id_customer')->on('customers')->cascadeOnDelete();
            $table->string('status');
            $table->date('order_date');
            $table->integer('total_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
