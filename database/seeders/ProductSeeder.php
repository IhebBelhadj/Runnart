<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\models\Product;
use App\models\ProductItem;
use App\models\ProductConfiguration;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Product::factory()
            ->count(25)
            ->create()
            ->each(function($product){
                $nbrOptions = rand(5,10);
                ProductItem::factory($nbrOptions)
                    ->create([
                        'product_id' => $product->id,
                        'price'=> rand(50 , 250)
                    ])
                    ->each(function($productItem) use($nbrOptions){
                        ProductConfiguration::factory($nbrOptions)
                        ->create([
                            'product_item_id'=> $productItem->id,
                        ]);
                    });
            });*/
    }
}
