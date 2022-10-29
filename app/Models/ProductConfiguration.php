<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductConfiguration extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function variationOption(){
        return $this->belongsTo(VariationOption::class);
    }

    public function ProductItem(){
        return $this->belongsTo(ProductItem::class);
    }
}

