<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->string('product_name');
            $table->string('product_code');
            $table->string('product_color');
            $table->text('description');
            $table->text('care');
            $table->string('sleeve');
            $table->string('pattern');
            $table->double('price', 8, 2);
            $table->integer('weight');
            $table->string('image');
            $table->string('video');
            $table->string('featured_item');
            $table->enum('status',[0,1])->default(0);
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
