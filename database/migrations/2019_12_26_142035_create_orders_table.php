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
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('tranx_id')->nullable();
            $table->string('paying_amount')->nullable();
            $table->string('shipping_charge')->nullable();
            $table->string('tax')->nullable();
            $table->string('total_amount')->nullable();
            $table->integer('status')->nullable()->default(0);
            $table->string('date')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->timestamps();
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
