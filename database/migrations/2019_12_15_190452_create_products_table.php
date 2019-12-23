<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->integer('subcategory_id')->nullable();
            $table->integer('brand_id');
            $table->string('product_name');
            $table->string('product_code');
            $table->text('product_details');
            $table->string('product_quantity');
            $table->string('product_color')->nullable();
            $table->string('product_size')->nullable();
            $table->string('product_model');
            $table->string('selling_prize');
            $table->string('discount_prize')->nullable();
            $table->string('product_slug')->unique();
            $table->string('product_image_one');
            $table->string('product_image_two')->nullable();
            $table->string('product_image_three')->nullable();
            $table->string('video_link')->nullable();
            $table->integer('status')->nullable();
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
