<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $fillable = [
    //     'name', 'price', 'buyer_contact', 'description', 'stock', 'img_path'
    // ];

    protected $table = "products";
}
