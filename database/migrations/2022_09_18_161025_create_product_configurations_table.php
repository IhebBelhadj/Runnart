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
        Schema::create('product_configurations', function (Blueprint $table) {
            $table->unsignedBigInteger('product_item_id');
            $table->unsignedBigInteger('variation_option_id');
            $table->foreign('product_item_id')->references('id')->on('product_items');
            $table->foreign('variation_option_id')->references('id')->on('variation_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_configurations');
    }
};
