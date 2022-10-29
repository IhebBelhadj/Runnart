<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->word(),
            'description'=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fuga dignissimos quibusdam, repudiandae et quos, nihil, vero accusamus corporis doloribus assumenda aspernatur doloremque eaque. Tempora laudantium corrupti fugiat corporis ratione.",
            'main_img'=> "/products/product.png",
            'category_id'=> $this->faker->randomElement([2,3,4,6,7,8,10,11,14,15]),
            'brand_id'=>$this->faker->randomElement([1,2,3,4,5]),
        ];
    }
}
