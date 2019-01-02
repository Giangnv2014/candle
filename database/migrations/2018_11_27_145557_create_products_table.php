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
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->string('code', 30)->unique();
            $table->text('description')->nullable();
            $table->string('branch', 100)->nullable();
            $table->string('available', 100)->nullable();
            $table->float('price', 11, 2)->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('sale')->nullable();
            $table->datetime('sale_to_date')->nullable();
            $table->float('rate', 2, 1)->nullable();
            $table->integer('review_count')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
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
