<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('feature_title');
            $table->text('feature_review');
            $table->text('feature_btn');
            $table->text('feature_btn_link')->nullable();
            $table->string('feature_image');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('featured_reviews');
    }
}
