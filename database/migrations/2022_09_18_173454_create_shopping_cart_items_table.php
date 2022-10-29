<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('shopping_cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreign('cart_id')->references('id')->on('shopping_carts');
            $table->foreign('product_item_id')->references('id')->on('product_items');
            $table->integer('qty');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_cart_items');
    }
};
