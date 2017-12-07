<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->date('year')->nullable();
            $table->string('ship_name');
            $table->string('ship_voyage')->nullable();
            $table->string('departure_port')->nullable();
            $table->string('transit_port')->nullable();
            $table->string('destination_port');
            $table->date('expected_arrival_date')->nullable();
            $table->date('arrival_date')->nullable();
            $table->date('departure')->nullable();
            $table->double('shipping_unit_price', 15, 8)->nullable();
            $table->double('other_price', 15, 8)->nullable();
            $table->string('delivery_method')->nullable();
            $table->string('annex_transfer_orders')->nullable();
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transports');
    }
}
