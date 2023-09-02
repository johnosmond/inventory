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
        Schema::create('parts_master_list', function (Blueprint $table) {
            
            $table->increments('id'); // do this because we will be connecting to it in Access with DAO table links

            $table->string('part_number', 50);

            $table->text('description');

            $table->unsignedInteger('manufacturer_id');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');

            $table->smallInteger('shelf_life_in_days')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parts_master_list');
    }
};
