<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'sku',
        'img_thumnail',
        'price',
        'sale_price',
        'description',
        'content',
        'material',
        'view',
        'is_active',
        'is_hot_deal',
        'is_show_home',
    ];
    protected $casts =[
        'is_active'=> 'boolean',
        'is_hot_deal'=> 'boolean',
        'is_show_home'=> 'boolean',
    ];
}
