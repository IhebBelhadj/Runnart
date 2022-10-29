<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function product(){
        return $this->belongsTo(ProductItem::class);
    }

    public function productConfiguration(){
        return $this->hasOne(productConfiguration::class);
    }


}
