<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->comment('user ID');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('energy_id')->comment('energy ID');
            $table->foreign('energy_id')->references('id')->on('energies')->onDelete('cascade');

            $table->double('total_volume', 11, 2)->default(0)->comment('total_volume of energy');
            $table->double('current_volume', 11, 2)->default(0)->comment('current_volume of energy');
            $table->double('selling_price', 11, 2)->default(0)->comment('selling_price of energy');
            $table->string('location')->comment('location of energy');

            $table->timestamps();

//            $table->comment = 'This table stores the store history of energy.';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
