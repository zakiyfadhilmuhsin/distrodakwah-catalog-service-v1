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
            $table->engine = "InnoDB";
            $table->bigIncrements('id')->unsigned();
            $table->string('product_name');
            $table->text('product_description')->nullable;
            $table->string('featured_image');
            $table->integer('price')->nullable;
            $table->integer('cogs')->nullable;
            $table->string('sku');
            $table->integer('weight');
            $table->string('tags')->nullable;
            $table->enum('product_type', ['Simple Product', 'Variant Product']);
            $table->bigInteger('category_id')->nullable();
            $table->bigInteger('brand_id')->nullable();
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
