<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\$\{Address}>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'street' => fake()->streetName(),
            'number' => fake()->randomNumber(2),
            'city' => fake()->city(),
            'cep' => fake()->numberBetween(12702030, 12704090),
            'state' => fake()->streetAddress(),
            'country' => fake()->country(),
            'complement' => fake()->streetName(),
            'neighborhood' => fake()->streetName(),
        ];
    }
}
