<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_settings', function (Blueprint $table) {
            $table->id();
            $table->double('tax',11,2)->default(0)->comment('the tax of market when trading');
            $table->double('administration_fee',11,2)->default(0)->comment('the administration_fee of market when trading');
            $table->timestamps();
//            record the set of market
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('market_settings');
    }
}
