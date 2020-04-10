<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('service_id');
			$table->string('service_name');
			$table->longText('service_desc');
            $table->float('service_price', 8, 2);
			$table->unsignedBigInteger('service_cat');
			$table->unsignedBigInteger('service_store');
			$table->foreign('service_cat')->references('service_category_id')->on('service_categories');
			$table->foreign('service_store')->references('store_id')->on('store');
			$table->integer('service_status');
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
        Schema::dropIfExists('services');
    }
}
