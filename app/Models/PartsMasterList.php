<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsMasterList extends Model
{
    use HasFactory;

    protected $table = 'parts_master_list'; // specified for clarity because plurality is vague
    protected $guarded = [];

    public function manufacturer() {
        return $this->belongsTo(Manufacturer::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function stockLines() {
        return $this->hasMany(StockLine::class, 'part_number', 'part_number');
    }
}
