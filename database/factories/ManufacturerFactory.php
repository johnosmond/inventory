<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as FakerFactory;
use App\Providers\UsStateProvider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufacturer>
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();

        $faker->addProvider(new UsStateProvider($faker));

        $usStateName = $faker->usState;

        return [
            'manufacturer' => fake()->company,
            'location_country' => 'US',
            'location_state' => $usStateName,
        ];
    }
}
