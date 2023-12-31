<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockLineAdjustment extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stockLine() {
        $this->belongsTo(StockLine::class);
    }
}
