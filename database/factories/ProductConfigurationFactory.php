<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\models\ProductCategory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductConfigurationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    public function definition()
    {
        return [
            'variation_option_id' => $this->faker->unique(true)->numberBetween(1,19),
        ];
    }
}
