<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcreteMixDesign
 extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
    ];

    protected $table = 'concrete_mix_design';
    protected $primary_key = 'id';
}
