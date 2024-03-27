<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcreteCompressiveStrength
 extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'concrete_compresive_strength';
    protected $primary_key = 'id';
}
