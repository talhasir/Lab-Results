<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClayLumpsInAggregateModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'clay_lumps_in_aggregate';
    protected $primary_key = 'id';
}
