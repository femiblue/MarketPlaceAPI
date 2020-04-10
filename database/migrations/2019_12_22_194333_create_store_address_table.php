<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_address', function (Blueprint $table) {
            $table->bigIncrements('store_address_id');
			$table->string('store_address_number');
			$table->string('store_address_street')->nullable();
			$table->string('store_address_area')->nullable();
			$table->string('store_address_postcode')->nullable();
			$table->string('store_address_city');
			$table->unsignedBigInteger('store_address_store');
			$table->foreign('store_address_store')->references('store_id')->on('store');
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
        Schema::dropIfExists('store_address');
    }
}
