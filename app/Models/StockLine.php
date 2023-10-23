<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockLine extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function part() {
        return $this->belongsTo(PartsMasterList::class, 'part_number');
    }
    
    public function stockLineAdjustments() {
        return $this->hasMany(StockLine::class);
    }
}
