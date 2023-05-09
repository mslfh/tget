<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->double('money',11,2)->comment('record current money of users');
            $table->integer('order_id')->nullable()->comment('record the order ID if necessary');
            $table->string('type')->nullable()->comment('1-deposit 2- trading cost 3-withdraw');
            $table->text('remark')->nullable()->comment('the remark of balance');

            $table->unsignedBigInteger('user_id')->comment('user ID');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
//            $table->comment = 'This table stores the balance history of users.';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balances');
    }
}
