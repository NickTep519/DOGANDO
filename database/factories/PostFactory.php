<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(rand(2,4)),
            'description' => $this->faker->sentences(rand(3,4), true) ,
            'kg' => $this->faker->numberBetween(1, 30),
            'price' => $this->faker->numberBetween(2000, 5000),
            'city_starts' => $this->faker->city() ,
            'city_ends' => $this->faker->city() ,
            'm_transport' => $this->faker->randomElement(['avion', 'bataeu']) , 
            'company' => $this->faker->word(),
            'type' => $this->faker->boolean() ,
            'status' => $this->faker->boolean(75) ,
            'starts_at' => $this->faker->dateTimeBetween('now', '+2 months') ,
            'ends_at' => $this->faker->dateTimeBetween('+2 months', '+4 months')

        ];
    }
}
