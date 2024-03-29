<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitWeightOfAggregateModel
 extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'unit_weight_of_aggregate';
    protected $primary_key = 'id';
}
