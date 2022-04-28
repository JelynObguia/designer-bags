<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bag_name' => $this->faker->randomElement(["The Kelly", "Classic Handbag", "The Jackie Bag"]),
            'brand' => $this->faker->randomElement(["Prada", "Hermes", "Chanel"]),
            'owner' => $this->faker->name,
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min =5000, $max = 1000000),
        ];
    }
}
