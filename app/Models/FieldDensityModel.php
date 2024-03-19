<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldDensityModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
    ];

    protected $table = 'fielddensity';
    protected $primary_key = 'id';
}
