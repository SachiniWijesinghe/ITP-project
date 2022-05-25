<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->float('cost_amount');
            $table->float('real_price');
            $table->float('selling_price');
            $table->float('hot_discount');
            $table->string('description');
            $table->string('size')->default('S');
            $table->string('color')->default('Red');
            $table->integer('quntity')->default(5);
            $table->string('image1');
            $table->string('image2');
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
        Schema::dropIfExists('items');
    }
};
