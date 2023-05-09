<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnergyRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_records', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('energy_id')->comment('energy ID');
            $table->foreign('energy_id')->references('id')->on('energies')->onDelete('cascade');

            $table->double('market_price', 11, 2)->comment('the current market price of energy');
            $table->timestamps();

//            comment = 'record the market price history of energy'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('energy_records');
    }
}
