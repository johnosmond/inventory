<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartsMasterList extends Model
{
    use HasFactory;
    protected $table = 'parts_master_list'; // specified for clarity because plurality is vague
    protected $guarded = [];
}
