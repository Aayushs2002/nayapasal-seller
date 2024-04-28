<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_name")->nullable();
            $table->string("slug")->nullable();
               $table->foreignId('seller_id')->constrained('sellers')->onDelete('cascade');
            $table->integer("featured")->nullable();
            $table->foreignId("brand_id")->constrained('brands')->onDelete('cascade')->nullable();
            $table->string("featured_image")->nullable();
            $table->longText("description")->nullable();
            $table->integer("product_order")->nullable();
            $table->integer("product_price")->nullable();
            $table->integer("cutoff_price")->nullable();
            $table->bigInteger("total_sale")->nullable();
            $table->foreignId("category_id")->nullable()->constrained('categories')->onDelete('cascade');
            $table->integer("product_stock")->nullable();
            $table->integer("mrp_price")->nullable();
            $table->longText("video")->nullable();
            $table->integer("discount_flag")->nullable();
            $table->string("discount_type")->nullable();
            $table->string("discount_amount")->nullable();
            $table->string("discount_percentage")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
