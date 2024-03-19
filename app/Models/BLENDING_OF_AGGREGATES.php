<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BLENDING_OF_AGGREGATES extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'blending_of_aggregates';
    protected $primary_key = 'id';
}
