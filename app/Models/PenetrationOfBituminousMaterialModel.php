<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenetrationOfBituminousMaterialModel
 extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'penetration_of_bituminous_material';
    protected $primary_key = 'id';
}
