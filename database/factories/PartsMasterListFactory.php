<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PartsMasterList>
 */
class PartsMasterListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $manufacturerId = \App\Models\Manufacturer::inRandomOrder()->first()->id;
        $categoryId = \App\Models\Category::inRandomOrder()->first()->id;

        return [
            'part_number' => $this->generateRandomPartNumber(),
            'description' => fake()->sentence(),
            'manufacturer_id' => $manufacturerId,
            'category_id' => $categoryId,
            'shelf_life_in_days' => fake()->numberBetween(30, 365),
        ];
    }

    private function generateRandomPartNumber(): string
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

        do {
            $length = fake()->numberBetween(6, 12);
            $partNumber = '';

            for ($i = 0; $i < $length; $i++) {
                $partNumber .= $characters[random_int(0, strlen($characters) - 1)];
            }
            
            // Check if the part number begins with a letter
            $startsWithLetter = ctype_alpha(substr($partNumber, 0, 1));

        } while (!$startsWithLetter);

        return $partNumber;
    }
}
