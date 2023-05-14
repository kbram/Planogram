<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('bay_id')->references('id')->on('bays')->onDelete('cascade');
            $table->bigInteger('aisle_id')->references('id')->on('aisles')->onDelete('cascade');
            $table->bigInteger('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('status');

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
        Schema::dropIfExists('stocks');
    }
}
