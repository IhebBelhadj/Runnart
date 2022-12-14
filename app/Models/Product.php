<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;


    public function variationOption(){
        return $this->belongsTo(VariationOption::class);
    }

    public function ProductCategory(){
        return $this->belongsToMany(ProductCategory::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
