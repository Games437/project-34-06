<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product_type extends Model
{
    use HasFactory;
    protected $table = 'product_types';
    protected $primaryKey = 'product_type_id';
    protected $fillable = ['name'];

    public function product(){
        return $this->hasMany(Product::class,'product_type_id');
    }
}

