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
            $table->foreignId('category_id')->index();
            $table->string('name');
            $table->string('sku')->unique()->comment('Mã sản phẩm');
            $table->string('image_thump')->nullable()->comment('Ảnh sản phẩm khi hiển thị ở danh sách');
            $table->string('overview')->nullable()->comment('Mô tả ngắn');
            $table->text('content')->nullable()->comment('Nội dung sản phẩm');
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
