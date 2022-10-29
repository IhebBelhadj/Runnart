<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationOption extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function variation(){
        return $this->belongsTo(Variation::class);
    }

    public function productConfiguration(){
        return $this->hasOne(ProductConfiguration::class);
    }
}
