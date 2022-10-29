<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Variation;
use App\models\VariationOption;

class VariationOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $variations = [
        [
            'name'=>'color',
            'value'=>'red',
        ],
        [
            'name'=>'color',
            'value'=>'green',
        ],
        [
            'name'=>'color',
            'value'=>'blue',
        ],
        [
            'name'=>'color',
            'value'=>'maganta',
        ],
        [
            'name'=>'color',
            'value'=>'turqoise',
        ],
        [
            'name'=>'color',
            'value'=>'brown',
        ],
        [
            'name'=>'color',
            'value'=>'orange',
        ],
        [
            'name'=>'color',
            'value'=>'yellow',
        ],
        [
            'name'=>'color',
            'value'=>'pink',
        ],
        [
            'name'=>'color',
            'value'=>'black',
        ],
        [
            'name'=>'color',
            'value'=>'white',
        ],
        [
            'name'=>'size',
            'value'=>'40'
        ],
        [
            'name'=>'size',
            'value'=>'41'
        ],
        [
            'name'=>'size',
            'value'=>'42'
        ],
        [
            'name'=>'size',
            'value'=>'43'
        ],
        [
            'name'=>'size',
            'value'=>'44'
        ],
        [
            'name'=>'size',
            'value'=>'45'
        ],
        [
            'name'=>'gender',
            'value'=>'Men'
        ],
        [
            'name'=>'gender',
            'value'=>'Women'
        ],


    ];

    public function run()
    {
        foreach($this->variations as $variation){

            $variationId = Variation::where('name' , 'like' , $variation['name'])->first()->id;

            $current = new VariationOption();
            $current->variation_id = $variationId;
            $current->value = $variation['value'];
            $current->save();
        }

    }
}
