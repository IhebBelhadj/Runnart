<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\ProductCategory;
use Illuminate\Support\Facades\Log;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $categories = [
        [
            'category_name'=>'Gym',
        ],
        [
            'category_name'=>'Training',
            'parent_category_name'=>'Gym',
        ],
        [
            'category_name'=>'Weightlifting',
            'parent_category_name'=>'Gym',
        ],
        [
            'category_name'=>'Boxing',
            'parent_category_name'=>'Gym',
        ],
        [
            'category_name'=>'Run',
        ],
        [
            'category_name'=>'Road',
            'parent_category_name'=>'Run',
        ],
        [
            'category_name'=>'Trail',
            'parent_category_name'=>'Run',
        ],
        [
            'category_name'=>'Cross country',
            'parent_category_name'=>'Run',
        ],
        [
            'category_name'=>'Hike',

        ],
        [
            'category_name'=>'Hike shoes',
            'parent_category_name'=>'Hike',
        ],
        [
            'category_name'=>'Hike boots',
            'parent_category_name'=>'Hike',
        ],
        [
            'category_name'=>'Sandals',
            'parent_category_name'=>'Hike',
        ],
        [
            'category_name'=>'Sports',
        ],

        [
            'category_name'=>'Basketball',
            'parent_category_name'=>'Sports',

        ],
        [
            'category_name'=>'Tennis',
            'parent_category_name'=>'Sports',

        ],
        [
            'category_name'=>'Basketball',
            'parent_category_name'=>'Sports',

        ],
        [
            'category_name'=>'Cricket',
            'parent_category_name'=>'Sports',

        ],
        [
            'category_name'=>'HandBall',
            'parent_category_name'=>'Sports',
        ],




    ];

    public function run()
    {
        foreach($this->categories as $category){
            $parentCategoryId = null;
            if (array_key_exists( 'parent_category_name' , $category )) {
                $parentCategoryId = ProductCategory::where('category_name' , 'like' , $category['parent_category_name'])->first()->id;
            }


            $current = new ProductCategory();
            $current->category_name = $category['category_name'];
            $current->parent_category_id = $parentCategoryId;
            $current->save();
        }

    }
}
