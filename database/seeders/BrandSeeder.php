<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $brandList = [
        [
            'brand_name'=>'Nike',
            'brand_img'=>'/brands/Nike-logo.png',
        ],
        [
            'brand_name'=>'Adidas',
            'brand_img'=>'/brands/Nike-logo.png',
        ],
        [
            'brand_name'=>'Filas',
            'brand_img'=>'/brands/Nike-logo.png',
        ],
        [
            'brand_name'=>'New Balance',
            'brand_img'=>'/brands/Nike-logo.png',
        ],
        [
            'brand_name'=>'Reebok',
            'brand_img'=>'/brands/Nike-logo.png',
        ],
    ];

    public function run()
    {
        foreach($this->brandList as $brand){
            $current = new Brand();
            $current->brand_name = $brand['brand_name'];
            $current->brand_img = $brand['brand_img'];
            $current->save();
        }

    }
}
