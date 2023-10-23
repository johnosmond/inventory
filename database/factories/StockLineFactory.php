<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockLine>
 */
class StockLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $part = \App\Models\PartsMasterList::inRandomOrder()->first();

        $existingStockLinesCount = $part->stockLines->count();

        $stockLineNumber = $existingStockLinesCount + 1;

        $qtyValues = fake()->numberBetween(1, 100);
        return [
            'part_number' => $part->part_number,
            'stock_line_num' => $stockLineNumber,
            'date_added' => fake()->dateTimeBetween('-365 days', 'now'),
            'qty_original' => $qtyValues,
            'qty_current' => $qtyValues,
        ];
    }
}
