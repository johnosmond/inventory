<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stock_lines', function (Blueprint $table) {
            
            $table->increments('id'); // do this because we will be connecting to it in Access with DAO table links

            $table->string('part_number', 50);
            $table->foreign('part_number')->references('part_number')->on('parts_master_list');

            $table->smallInteger('stock_line_num');

            $table->dateTime('date_added')->default(DB::raw('CURRENT_TIMESTAMP')); // cannot be just 'date' because we will be connecting to it in Access

            $table->smallInteger('qty_original');
            $table->smallInteger('qty_current');

            $table->boolean('depleted')->default(false);

            $table->timestamps();

            $table->index('stock_line_num');
            $table->index('date_added');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_lines');
    }
};
