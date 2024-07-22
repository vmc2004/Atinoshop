<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'image',
        'price',
        'sale_price',
        'description',
        'material',
        'category_id',
        'brand_id'
        
    ]; 
}
