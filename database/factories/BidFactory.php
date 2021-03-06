<?php

namespace Database\Factories;

use App\Models\Bid;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BidFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $products = Product::pluck('id')->toArray();
        return [
            'user_id' => $this->faker->randomElement($users),
            'product_id' => $this->faker->randomElement($products),
            'bid_amount' => $this->faker->numberBetween(100,999)
        ];
    }
}
