<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurRecommendationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_recommendations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('recom_title', 64);
            $table->string('cpu', 64);
            $table->string('motherboard', 64);
            $table->string('ram', 64);
            $table->string('gpu', 64);
            $table->string('storage', 64);
            $table->string('recom_image', 64);
            $table->string('price', 64);
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
        Schema::dropIfExists('our_recommendations');
    }
}
