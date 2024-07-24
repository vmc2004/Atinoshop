<?php

use App\Models\Category;
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
            $table->foreignIdFor(Category::class)->constrained();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('sku')->unique();
            $table->string('img_thumnail')->nullable();
            $table->double('price');
            $table->double('sale_price')->nullable();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('material')->comment('Chất liệu');
            $table->unsignedBigInteger('view')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_hot_deal')->default(false);
            $table->boolean('is_show_home')->default(false);

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
