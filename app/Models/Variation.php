<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function variationOption(){
        return $this->hasOne(VariationOption::class);
    }
}
