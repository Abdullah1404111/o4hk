<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('nick_name');
            $table->string('designation');
            $table->string('product_image');
            $table->longText('user_details');
            $table->string('skype');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('t_link');
            $table->string('sorting_cat');
            $table->string('order_cat');
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
        Schema::dropIfExists('products');
    }
}
