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
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("product_id")->constrained('products')->onDelete('cascade');
            $table->integer("attribute_group_id")->constrained('attribute_groups')->nullable();
            $table->integer("attribute_id")->constrained('attributes')->nullable();
            $table->integer("seller_id")->constrained('sellers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attributes');
    }
};
