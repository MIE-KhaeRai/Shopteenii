<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_s', function (Blueprint $table) {
            $table->id();
            $table->integer('shop_id');
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id')->nullable();
            $table->string('warranty_type')->nullable();
            $table->string('product_unit')->nullable();
            $table->integer('product_weight')->default(0);
            $table->integer('product_L')->default(0);
            $table->integer('product_W')->default(0);
            $table->integer('product_H')->default(0);
            $table->json('product_option')->nullable();
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
        Schema::dropIfExists('product_s');
    }
}
