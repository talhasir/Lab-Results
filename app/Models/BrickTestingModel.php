<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrickTestingModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
    ];

    protected $table = 'brick_testing';
    protected $primary_key = 'id';
}
