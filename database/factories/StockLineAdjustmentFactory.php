<?php

namespace Database\Factories;

use App\Models\StockLine;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StockLineAdjustment>
 */
class StockLineAdjustmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // grab a stock line record as long as the qty_current is not 0
        do {
            $stockLine = StockLine::inRandomOrder()->first();
            $maxQtyAdjusted = $stockLine->qty_current;
        } while ($maxQtyAdjusted === 0);

        $qtyAdjusted = random_int(1, $maxQtyAdjusted);

        $stockLine->qty_current -= $qtyAdjusted;
        $stockLine->save();

        return [
            'stock_line_id' => $stockLine->id,
            'qty_adjusted' => $qtyAdjusted,
            'adjustment_notes' => fake()->words(fake()->numberBetween(1, 5), $asText = true),
            'date_adjusted' => fake()->dateTimeBetween('-365 days', 'now'),
        ];
    }
}
