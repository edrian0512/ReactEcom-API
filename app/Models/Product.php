<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'slug',
        'name',
        'description',
        'meta_title',
        'meta_keyword',
        'meta_descrip',
        'selling_price',
        'original_price',
        'qty',
        'image',
        'brand',
        'featured',
        'popular',
        'status',
    ];
}
