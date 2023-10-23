<?php

namespace Database\Seeders;

use App\Models\StockLine;
use Illuminate\Database\Seeder;
use App\Models\StockLineAdjustment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StockLineAdjustmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StockLineAdjustment::factory(50)->create();

        // // Get all stock lines
        // $stockLines = StockLine::all();

        // // Loop through each stock line and create adjustments
        // foreach ($stockLines as $stockLine) {
        //     $totalAdjustment = StockLineAdjustment::where('stock_line_id', $stockLine->id)->sum('qty_adjusted');
        //     $stockLine->qty_current -= $totalAdjustment;
        //     $stockLine->save();
        // }
    }
}
