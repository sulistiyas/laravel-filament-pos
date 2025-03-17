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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id('id_inventory');
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('products')->cascadeOnDelete();
            $table->integer('stock');
            $table->integer('stock_min');
            $table->integer('stock_max');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
