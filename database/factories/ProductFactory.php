<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $condition = ['New','Used'];
        return [
            'name' => $this->faker->name,
            // 'image' => $this->faker->image(Storage::makeDirectory('ProductImages')),
            // 'image' => $this->faker->image('ProductImages',640,480, null, false),
            'description' => $this->faker->sentence(200),
            'condition' => $this->faker->randomKey($condition),
            'ending_date' => $this->faker->dateTimeBetween(now(),'+1 week'),
            'starting_price' => $this->faker->numberBetween(100,999),
        ];
    }
}
