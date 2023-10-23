<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stock_line_adjustments', function (Blueprint $table) {
            
            $table->increments('id'); // do this because we will be connecting to it in Access with DAO table links
            
            $table->unsignedInteger('stock_line_id');
            $table->foreign('stock_line_id')->references('id')->on('stock_lines');

            $table->dateTime('date_adjusted');
            $table->smallInteger('qty_adjusted');

            $table->text('adjustment_notes')->nullable();

            $table->timestamps();

            $table->index('date_adjusted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_line_adjustments');
    }
};
