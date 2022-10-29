<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Variation;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $variations = [
        [
            'name'=>'color',
        ],
        [
            'name'=>'size',
        ],
        [
            'name'=>'gender',
        ],

    ];

    public function run()
    {
        foreach($this->variations as $variation){
            $current = new Variation();
            $current->name = $variation['name'];
            $current->save();
        }

    }
}
