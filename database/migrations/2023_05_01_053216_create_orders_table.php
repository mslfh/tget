<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('buyer_id')->comment('user ID');
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('store_id')->comment('energy store ID');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');

            $table->unsignedBigInteger('seller_id')->comment('user ID');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');

            $table->double('market_price',11,2)->comment('the market_price when trading');
            $table->double('average_price',11,2)->comment('the average_price when trading');
            $table->double('volume',11,2)->comment('the volume of energy when trading');
            $table->double('tax',11,2)->comment('the tax of market when trading');
            $table->double('administration_fee',11,2)->comment('the administration_fee of market when trading');

            $table->timestamps();

//            $table->comment = 'This table stores the trading order.';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
